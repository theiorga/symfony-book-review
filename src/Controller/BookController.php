<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Repository\BookRepository;
use App\Repository\ReviewRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/book')]
final class BookController extends AbstractController{
    #[Route(name: 'app_book_index', methods: ['GET'])]
    public function index(BookRepository $bookRepository, Request $request, PaginatorInterface $paginator): Response
    {
        // Fetch the books query (without fetching all books at once)
        $query = $bookRepository->createQueryBuilder('b')
            ->orderBy('b.id', 'DESC') // Sort newest books first
            ->getQuery();

        // Paginate the results
        $books = $paginator->paginate(
            $query, // Doctrine Query
            $request->query->getInt('page', 1), // Get current page (default: 1)
            12 // Number of books per page
        );

        return $this->render('book/index.html.twig', [
            'books' => $books,
        ]);
    }

    #[Route('/new', name: 'app_book_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('IS_AUTHENTICATED_FULLY')) {
            $this->addFlash('error', 'You need to be logged in to add a book. ');
            return $this->redirectToRoute('app_login');
        }

        $book = new Book();
        // Set the logged-in user as the creator of the book
        $book->setCreatedBy($this->getUser());

        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('imageFile')->getData();

            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('uploads_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Image upload failed.');
                }

                $book->setImageFilename($newFilename);
            }

            $entityManager->persist($book);
            $entityManager->flush();

            return $this->redirectToRoute('app_book_show', ['id' => $book->getId()]);
        }

        return $this->render('book/new.html.twig', [
            'book' => $book,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_book_show', methods: ['GET'])]
    public function show(Book $book, ReviewRepository $reviewRepository, PaginatorInterface $paginator, Request $request): Response
    {
        /// Fetch reviews for the book in descending order
        $query = $reviewRepository->createQueryBuilder('r')
            ->andWhere('r.book = :book')
            ->setParameter('book', $book)
            ->orderBy('r.createdAt', 'DESC') // Newest reviews first
            ->getQuery();

        // Paginate the reviews
        $reviews = $paginator->paginate(
            $query, // Doctrine Query
            $request->query->getInt('page', 1), // Get current page (default: 1)
            5 // Number of reviews per page
        );

        return $this->render('book/show.html.twig', [
            'book' => $book,
            'reviews' => $reviews,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_book_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Book $book, EntityManagerInterface $entityManager): Response
    {
        // Use the voter to check edit permission
        $this->denyAccessUnlessGranted('edit', $book);

        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_book_show', ['id' => $book->getId()]);
        }

        return $this->render('book/edit.html.twig', [
            'book' => $book,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_book_delete', methods: ['POST'])]
    public function delete(Request $request, Book $book, EntityManagerInterface $entityManager): Response
    {
        // Use the voter to check delete permission
        $this->denyAccessUnlessGranted('delete', $book);

        if ($this->isCsrfTokenValid('delete'.$book->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($book);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_book_index', [], Response::HTTP_SEE_OTHER);
    }
}

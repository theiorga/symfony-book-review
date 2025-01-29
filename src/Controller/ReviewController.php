<?php

namespace App\Controller;

use App\Entity\Review;
use App\Form\ReviewType;
use App\Repository\BookRepository;
use App\Repository\ReviewRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;


#[Route('/review')]
final class ReviewController extends AbstractController{
    #[Route(name: 'app_review_index', methods: ['GET'])]
    public function index(ReviewRepository $reviewRepository): Response
    {
        return $this->render('review/index.html.twig', [
            'reviews' => $reviewRepository->findAll(),
        ]);
    }

    #[Route('/new/{bookId<\d+>}', name: 'app_review_new', methods: ['GET', 'POST'])]
    public function new(
        int $bookId,
        Request $request,
        EntityManagerInterface $entityManager,
        Security $security,
        BookRepository $bookRepository
    ): Response {
        // Check if the user is logged in
        if (!$this->isGranted('IS_AUTHENTICATED_FULLY')) {
            $this->addFlash('error', 'You need to be logged in to add a review. ');
            return $this->redirectToRoute('app_login');
        }

        // Get the currently logged-in user
        $user = $security->getUser();

        $book = $bookRepository->find($bookId);
        if (!$book) {
            throw $this->createNotFoundException('The requested book does not exist.');
        }

        $review = new Review();
        // Pre-set the reviewer's creator
        $review->setReviewer($user);
        $review->setBook($book);

        // Create and handle the form
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($review);
            $entityManager->flush();

            return $this->redirectToRoute('app_book_show', ['id' => $book->getId()]);
        }

        return $this->render('review/new.html.twig', [
            'review' => $review,
            'form' => $form,
            'book' => $book,
        ]);
    }

    #[Route('/{id<\d+>}', name: 'app_review_show', methods: ['GET'])]
    public function show(Review $review): Response
    {
        return $this->render('review/show.html.twig', [
            'review' => $review,
        ]);
    }

    #[Route('/{id<\d+>}/edit', name: 'app_review_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Review $review, EntityManagerInterface $entityManager): Response
    {
        // Check if the logged-in user has permission to edit the review
        try {
            $this->denyAccessUnlessGranted('edit', $review);
        } catch (\Symfony\Component\Security\Core\Exception\AccessDeniedException $e) {
            $this->addFlash('error', 'You are not allowed to edit this review. You can only edit your own reviews if you are logged in.');
            return $this->redirectToRoute('app_review_index');
        }

        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $book = $review->getBook();
            return $this->redirectToRoute('app_book_show', ['id' => $book->getId()]);
        }

        return $this->render('review/edit.html.twig', [
            'review' => $review,
            'form' => $form,
        ]);
    }

    #[Route('/{id<\d+>}', name: 'app_review_delete', methods: ['POST'])]
    public function delete(Request $request, Review $review, EntityManagerInterface $entityManager): Response
    {
        // Check if the logged-in user has permission to edit the review
        try {
            $this->denyAccessUnlessGranted('delete', $review);
        } catch (\Symfony\Component\Security\Core\Exception\AccessDeniedException $e) {
            $this->addFlash('error', 'You are not allowed to delete this review. You can only delete your own reviews if you are logged in.');
            return $this->redirectToRoute('app_review_index');
        }
        $id = $review->getBook()->getId();
        if ($this->isCsrfTokenValid('delete'.$review->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($review);
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_book_show', ['id' => $id], Response::HTTP_SEE_OTHER);


    }
}

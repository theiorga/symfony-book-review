<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SecurityFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager
    ): Response {
        $user = new User();

        $form = $this->createForm(SecurityFormType::class, $user, ['include_terms' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if (!$form->isValid()) {
                $this->addFlash('danger', 'Email is already registered.');
                return $this->redirectToRoute('app_register');
            }

            if ($form->isValid()) {
                $user->setPassword(
                    $passwordHasher->hashPassword(
                        $user,
                        $form->get('plainPassword')->getData()
                    )
                );

                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', 'Registration successful. Please log in.');
                return $this->redirectToRoute('app_login');
            }
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
            'errors' => ''
        ]);
    }


}

<?php

namespace App\Controller;

use App\Form\SecurityFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

final class LoginController extends AbstractController{
    #[Route('/login', name: 'app_login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        // If the user is already logged in, redirect to the 'app_review_index' route
        if ($this->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('app_book_index');
        }
        // Get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // Last entered username
        $lastUsername = $authenticationUtils->getLastUsername();

        // Create the form without including "agreeTerms"
        $form = $this->createForm(SecurityFormType::class, null, [
            'include_terms' => false,
        ]);

        return $this->render('login/index.html.twig', [
            'loginForm' => $form->createView(),
            'error' => $error,
            'lastUsername' => $lastUsername,
            'include_terms' => false,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void {

        throw new \LogicException('method can be blank');

    }
}

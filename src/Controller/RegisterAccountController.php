<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterAccountController extends AbstractController
{
    #[Route('/register', name: 'register_account')]
    public function index(): Response
    {
        return $this->render('register_account/index.html.twig', [
            'controller_name' => 'RegisterAccountController',
        ]);
    }
}

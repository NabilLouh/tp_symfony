<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
   #[Route(path: '/', name: 'home' )]
    public function index()
    {
        return $this->render('welcome/index.html.twig');
    }

    #[Route(path: '/hello/{nom}', name: 'hello' )]
    public function hello($nom = "nabil")
    {
        return $this->render('welcome/hello.html.twig', [
            'nom' => ucfirst(strtolower($nom)),
        ]);
    }
}

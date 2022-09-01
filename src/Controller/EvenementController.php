<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenementController extends AbstractController
{
    #[Route('/evenement', name: 'app_evenement')]
    public function index()
    {
        return $this->render('evenement/index.html.twig');
    }

    #[Route('/evenement/create', name: 'app_evenement_create')]
    public function create()
    {
        return $this->render('evenement/create.html.twig');
    }
}
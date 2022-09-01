<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Repository\EvenementRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenementController extends AbstractController
{
    #[Route('/evenement', name: 'app_evenement')]
    public function index(ManagerRegistry $doctrine, EvenementRepository $repository)
    {
        $evenements = $repository->findAll(); 

        dump($evenements);

        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements,
        ]);
    }

    #[Route('/evenement/{id}', name: 'app_evenement_show')]
    public function show(EvenementRepository $repository, Evenement $evenement)
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    #[Route('/evenement/create', name: 'app_evenement_create')]
    public function create()
    {
        return $this->render('evenement/create.html.twig');
    }
}
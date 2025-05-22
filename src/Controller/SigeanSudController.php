<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SigeanSudController extends AbstractController
{
    #[Route('', name: 'index')]
    public function index(): Response
    {
        return $this->render('sigean_sud/index.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }

    #[Route('/listeMenu', name: 'listeMenu')]
    public function listeMenu(): Response
    {
        return $this->render('sigean_sud/homeMenu.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }

    #[Route('/ajoutMenu', name: 'ajoutMenu')]
    public function ajoutMenu(): Response
    {
        return $this->render('sigean_sud/addMenu.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }

    #[Route('/editMenu', name: 'editMenu')]
    public function editMenu(): Response
    {
        return $this->render('sigean_sud/editMenu.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }

    #[Route('/deleteMenu', name: 'deleteMenu')]
    public function deleteMenu(): Response
    {
        return $this->render('sigean_sud/deleteMenu.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }

    #[Route('/listeEspece', name: 'listeEspece')]
    public function listeEspece(): Response
    {
        return $this->render('sigean_sud/homeEspece.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }

    #[Route('/ajoutEspece', name: 'ajoutEspece')]
    public function ajoutEspece(): Response
    {
        return $this->render('sigean_sud/addEspece.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }

    #[Route('/editEspece', name: 'editEspece')]
    public function editEspece(): Response
    {
        return $this->render('sigean_sud/editEspece.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }

    #[Route('/deleteEspece', name: 'deleteEspece')]
    public function deleteEspece(): Response
    {
        return $this->render('sigean_sud/deleteEspece.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }

    #[Route('/listeRepas', name: 'listeRepas')]
    public function listeRepas(): Response
    {
        return $this->render('sigean_sud/homeRepas.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }

    #[Route('/ajoutRepas', name: 'ajoutRepas')]
    public function ajoutRepas(): Response
    {
        return $this->render('sigean_sud/addRepas.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }

    #[Route('/editRepas', name: 'editRepas')]
    public function editRepas(): Response
    {
        return $this->render('sigean_sud/editRepas.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }

    #[Route('/deleteRepas', name: 'deleteRepas')]
    public function deleteRepas(): Response
    {
        return $this->render('sigean_sud/deleteRepas.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }

    #[Route('/listeSoignant', name: 'listeSoignant')]
    public function listeSoignant(): Response
    {
        return $this->render('sigean_sud/homeSoignants.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }

    #[Route('/ajoutSoignant', name: 'ajoutSoignant')]
    public function ajoutSoignant(): Response
    {
        return $this->render('sigean_sud/addSoignant.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }

    #[Route('/editSoignant', name: 'editSoignant')]
    public function editSoignant(): Response
    {
        return $this->render('sigean_sud/editSoignant.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }

    #[Route('/deleteSoignant', name: 'deleteSoignant')]
    public function deleteSoignant(): Response
    {
        return $this->render('sigean_sud/deleteSoignant.html.twig', [
            'controller_name' => 'SigeanSudController',
        ]);
    }
}

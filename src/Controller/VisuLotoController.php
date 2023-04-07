<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VisuLotoController extends AbstractController
{
    #[Route('/', name: 'app_visu_loto')]
    public function index(): Response
    {
        return $this->render('visu_loto/index.html.twig', [
            'controller_name' => 'VisuLotoController',
        ]);
    }
}

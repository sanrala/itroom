<?php

namespace App\Controller;

use League\Csv\Reader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Style\SymfonyStyle;
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

    public function importLoto(SymfonyStyle $io): void
    {
        $io->title('Importation des villes');
    }

    private function readCsvFile(): Reader 
    {
        $csv = Reader::createFromPath('%kernel.root.dir%/../import/loto.csv', 'r');
        $csv->setHeaderOffset(0);

        return $csv;
    }
}

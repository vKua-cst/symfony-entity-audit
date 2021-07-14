<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeanceController extends AbstractController
{
    /**
     * @Route("/seance", name="seance")
     */
    public function index(): Response
    {
        return $this->render('seance/index.html.twig', []);
    }
}

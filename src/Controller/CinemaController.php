<?php

namespace App\Controller;

use App\Entity\Cinema;
use App\Form\CinemaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CinemaController extends AbstractController
{
    /**
     * @Route("/cinema", name="cinema")
     */
    public function index(): Response
    {
        return $this->render('cinema/index.html.twig', []);
    }

    /**
     * @Route("/cinema/new", name="cinema_new")
     * @Route("/cinema/{slug}", name="cinema_edit")
     *
     * @param Request $request
     * @return Response
     */
    public function new(Cinema $cinema = null, Request $request): Response
    {
        if(!$cinema) {
            $cinema = new Cinema();
        }

        $form = $this->createForm(CinemaType::class, $cinema);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $cinema = $form->getData();
            $em     = $this->getDoctrine()->getManager();
            $em->persist($cinema);
            $em->flush();
        }

        return $this->render('cinema/new.html.twig', [
            'form' => $form->createView()
        ]);
    }
}

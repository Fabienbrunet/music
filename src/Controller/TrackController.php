<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Track;

class TrackController extends AbstractController
{
    /**
     * @Route("/track", name="track")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Track::class);

        $tracks = $repository->findAll();
        
        return $this->render('track/index.html.twig', [
            'tracks' => $tracks,
        ]);
    }
}

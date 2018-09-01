<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Lesson;
use App\Entity\Track;
use App\Entity\BackingTrack;

class LessonController extends AbstractController
{
    /**
     * @Route("/lesson/{id}", name="lesson")
     */
    public function index($id = null)
    {
        $repositoryLesson = $this->getDoctrine()->getRepository(Lesson::class);
        $lessons = $repositoryLesson->findBy(
            ['tra_id' => $id]
        );
        
        $repositoryTrack = $this->getDoctrine()->getRepository(Track::class);
        $track = $repositoryTrack->find($id);
        
        $repositoryBack = $this->getDoctrine()->getRepository(BackingTrack::class);
        $backs = $repositoryBack->findBy(
            ['tra_id' => $id]
        );
    
        return $this->render('lesson/index.html.twig', [
            'track' => $track,
            'lessons' => $lessons,
            'backs' => $backs
        ]);
    }
    
}

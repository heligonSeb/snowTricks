<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TricksController extends AbstractController
{
    #[Route('/tricks', name: "all_tricks", methods: ['GET'])]
    public function tricksList(): Response
    {
        return $this->render('all-tricks.html.twig');
    }

    #[Route('/trick/:id', name: "trick", methods: ['GET'])]
    public function trick(): Response
    {
        return $this->render('trick.html.twig');
    }

    #[Route('/trick/:id/edit', name: "trick_edit", methods: ['GET'])]
    public function trickEdit(): Response
    {
        return $this->render('trick-edit.html.twig');
    }

    #[Route('/trick/:id/edit/Save', name: "save_edit", methods: ['GET'])]
    public function saveEdit(): Response
    {
        return $this->render('trick.html.twig');
    }

    #[Route('/trick/:id/delete', name: "trick_delete", methods: ['GET'])]
    public function trickDelete(): Response
    {
        return $this->render('trick-delete.html.twig');
    }
}
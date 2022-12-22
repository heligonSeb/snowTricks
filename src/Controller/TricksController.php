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

    #[Route('/tricks/{id}', name: "trick", methods: ['GET'])]
    public function trick(int $id): Response
    {
        var_dump($id);
        return $this->render('trick.html.twig');
    }

    #[Route('/tricks/{id}/edit', name: "trick_edit", methods: ['GET'])]
    public function trickEdit(): Response
    {
        return $this->render('trick-edit.html.twig');
    }

    #[Route('/tricks/add', name: "add_trick", methods: ['GET'])]
    public function saveEdit(): Response
    {
        return $this->render('add-trick.html.twig');
    }

    #[Route('/tricks/:id/delete', name: "trick_delete", methods: ['GET'])]
    public function trickDelete(): Response
    {
        return $this->render('trick-delete.html.twig');
    }
}
<?php

namespace App\Controller;

use App\Entity\Figure;
use App\Form\AddTrickFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
        return $this->render('trick.html.twig');
    }

    #[Route('/tricks/{id}/edit', name: "trick_edit", methods: ['GET'])]
    public function trickEdit(): Response
    {
        return $this->render('trick-edit.html.twig');
    }

    #[Route('/tricksadd', name: "add_trick", methods: ['GET'])]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $trick = new Figure();
        $trick->setCreateDate(new \DateTime());

        $form = $this->createForm(TrickFormType::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($trick);
            $entityManager->flush();
        }

        return $this->render('add-trick.html.twig', ['trickForm' => $form->createView()]);
    }

    #[Route('/tricks/{id}/delete', name: "trick_delete", methods: ['GET'])]
    public function trickDelete(): Response
    {
        return $this->render('trick-delete.html.twig');
    }
}
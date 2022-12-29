<?php

namespace App\Controller;

use App\Entity\Figure;
use App\Form\TrickFormType;
use App\Repository\FigureGroupRepository;
use App\Repository\FigureRepository;
use DateTime;
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
    public function trick(FigureRepository $figureRepository, FigureGroupRepository $figureGroupRepository, int $id): Response
    {
        $trick = $figureRepository->find($id);

        if (!$trick) {
            return $this->render('error.html.twig');
        }

        $trickGroup = $figureGroupRepository->find($trick->getFigureGroupId());

        return $this->render('trick.html.twig', [
            'trick' => $trick,
            'trickGroup' => $trickGroup
        ]);
    }

    #[Route('/tricks/{id}/edit', name: "trick_edit")]
    public function trickEdit(Request $request, EntityManagerInterface $entityManager, FigureRepository $figureRepository, int $id): Response
    {
        $trick = $figureRepository->find($id);

        if (!$trick) {
            return $this->render('error.html.twig');
        }

        $trick->setEdit_date(new \DateTime());

        $form = $this->createForm(TrickFormType::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($trick);
            $entityManager->flush();

            return $this->redirectToRoute('trick', ['id' => $trick->getId()]);
        }

        return $this->render('trick-edit.html.twig', [
            'trick' => $trick,
            'trickForm' => $form->createView()
        ]);
    }

    #[Route('/tricksadd', name: "add_trick")]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $trick = new Figure();
        $trick->setCreate_date(new \DateTime());

        $form = $this->createForm(TrickFormType::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($trick);
            $entityManager->flush();

            return $this->redirectToRoute('trick', ['id' => $trick->getId()]);
        }

        return $this->render('add-trick.html.twig', ['trickForm' => $form->createView()]);
    }

    #[Route('/tricks/{id}/delete', name: "trick_delete", methods: ['GET'])]
    public function trickDelete(FigureRepository $figureRepository, EntityManagerInterface $entityManager, int $id): Response
    {
        $trick = $figureRepository->find($id);

        if (!$trick) {
            return $this->render('error.html.twig');
        }

        $entityManager->remove($trick);
        $entityManager->flush();

        return $this->render('all-trick.html.twig');
    }
}
<?php

namespace App\Controller;

use App\Entity\Figure;
use App\Entity\Picture;
use App\Form\TrickFormType;
use App\Repository\FigureGroupRepository;
use App\Repository\FigureRepository;
use App\Service\PictureService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TricksController extends AbstractController
{
    private $params;

    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }

    #[Route('/tricks', name: "all_tricks", methods: ['GET'])]
    public function tricksList(): Response
    {
        return $this->render('all-tricks.html.twig');
    }

    #[Route('/tricks/add', name: "add_trick", methods:["GET", "POST"])]
    public function add(Request $request, EntityManagerInterface $entityManager, FigureRepository $figureRepo, PictureService $pictureService): Response
    {
        $trick = new Figure();
        
        $form = $this->createForm(TrickFormType::class, $trick);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $trick->setCreateDate(new \DateTime());

            //check if trick->getName() already exist
            $findMatch = $figureRepo->findOneBy(array('name' => $trick->getName()));

            if ($findMatch) {
                return $this->render('error.html.twig');
            }
            // end check if trick already exist

            //clear pictures already link to $tricks
            $trick->getPictures()->clear();

            // get all pictures
            $pictures = $request->files->get('trick_form')['pictures'];

            foreach ($pictures as $picture) {
                // set the folder
                $folder = "tricks";

                // use the picture service for add a picture
                $file = $pictureService->add($picture['images'], $folder, 200, 200);

                $pic = new Picture();
                $pic->setName($file);
                $pic->setFolder($folder);

                $ext = explode(".", $file);
                $pic->setExtension($ext[1]);

                $trick->addPicture($pic);
            }

            $entityManager->persist($trick);
            $entityManager->flush();
    
            return $this->redirectToRoute('trick', ['id' => $trick->getId()]);
        }
    
        return $this->render('add-trick.html.twig', ['trickForm' => $form->createView()]);
    }

    #[Route('/tricks/{id}', name: "trick", methods: ['GET'])]
    public function trick(FigureRepository $figureRepository, FigureGroupRepository $figureGroupRepository, int $id): Response
    {
        $trick = $figureRepository->find($id);

        if (!$trick) {
            return $this->render('error.html.twig');
        }

        $trickGroup = $figureGroupRepository->find($trick->getFigureGroup());

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
        
        $form = $this->createForm(TrickFormType::class, $trick);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $trick->setEditDate(new \DateTime());

            $entityManager->persist($trick);
            $entityManager->flush();

            return $this->redirectToRoute('trick', ['id' => $trick->getId()]);
        }

        return $this->render('trick-edit.html.twig', [
            'trick' => $trick,
            'trickForm' => $form->createView()
        ]);
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

        return $this->redirectToRoute('all_tricks');
    }
}
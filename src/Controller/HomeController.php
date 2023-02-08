<?php
// src\Controller\HommeController.php
namespace App\Controller;

use App\Repository\FigureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public function __construct(private MailerInterface $mailer) {

    }

    #[Route('/', name: "app_home", methods: ['GET'])]
    public function index(FigureRepository $tricksRepo): Response
    {
        return $this->render('home/home.html.twig', [
            'tricks' => $tricksRepo->findAll()
        ]);
    }

   
}
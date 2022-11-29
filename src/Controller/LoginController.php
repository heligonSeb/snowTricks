<?php
// src/Controller/LoginController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\User;

class LoginController extends AbstractController
{
    // #[Route('/Login', name: 'connexion')]
    // public function connexion()
    // {

    // }

    // /**
    //  * Creation du formulaire de connexion
    //  * 
    //  * @param Request $request
    //  */
    // public function connexionForm(Request $request): Response
    // {
    //     $login = new User();

    //     $form = $this->createFormBuilder($user)
    //         ->add('username', TextType::class)
    //         ->add('password')
    // }

}
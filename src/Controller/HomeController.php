<?php

namespace App\Controller;

//use App\Repository\ConferenceRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use Twig\Environment;


class HomeController extends AbstractController 
{
    //route déclaré dans le "routes.yaml"
    public function accueil() { 
        return $this->render('Accueil.php');     
    }
    
    #[Route('/asuka')] //Redirection vers une vrai page
    public function assuka(): Response 
    {
        return $this->render('Assuka.php');

    }
}
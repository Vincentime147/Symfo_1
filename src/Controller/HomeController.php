<?php

namespace App\Controller;

//use App\Repository\ConferenceRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use Twig\Environment;


class HomeController extends AbstractController {

public function accueil() { //route déclaré dans le "routes.yaml"
    return $this->render('Assuka.php');
    
    }
 public function bonjour() { //route déclaré dans le "routes.yaml"
 return new Response('Bonjour à toutes et à tous!!');

 }

 #[Route('/asuka')]
 public function asuka() {
 return new Response('Welcome to my Asuka WOLD!');

 }
 #[Route('/no')] //redirige vers le roote déclaré dans "routes.yaml"
 public function no() {
    return $this->redirectToRoute('bonjour');
 }


 #[Route('/google')]
 public function google() {
    return $this->redirect('https://www.google.com');
 }


 #[Route('/assuka')]
 public function assuka(): Response //Redirection vers une vrai page
 {
    return $this->render('Assuka.php');

 }
}
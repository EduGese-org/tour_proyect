<?php 
// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;

class HomeController extends AbstractController
{        
        public function homepage(): Response
        {
    
            return $this->render('homepage.html.twig');
        }
    
         public function quienesSomos(): Response
        {
    
            return $this->render('quienesSomos.html.twig');
        }
    
        public function actividades(): Response
        {
            $now = new DateTime();
    
            return $this->render('actividades.html.twig', [
                'now' => $now,
            ]
    
            );
        }
    }
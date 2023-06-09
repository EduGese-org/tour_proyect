<?php 
// src/Controller/Admincontroller.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    
    public function adminDashboard(): Response
    {
        return $this->render('adminDashboard.html.twig');
    }
    public function showAdminActivities(): Response
    {
        return $this->render('adminActivityList.html.twig');
    }
}
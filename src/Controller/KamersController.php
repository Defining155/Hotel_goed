<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class KamersController extends AbstractController
{
    /**
     * @Route("/kamers", name="kamers")
     */
    public function index()
    {
        return $this->render('kamers/kamers.html.twig', [
            'controller_name' => 'KamersController',
        ]);
    }

    /**
     * @Route("/kamer1", name="kamer1")
     */
    public function kamer1()
    {
        return $this->render('kamers/kamer1.html.twig', [
            'controller_name' => 'KamersController',
        ]);
    }
}

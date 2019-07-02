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

    /**
     * @Route("/check", name="kamer_check", methods={"POST"})
     */
    public function checkDate()
    {
        $BeginDate = $_POST["BeginDate"];
        $EndDate = $_POST["EndDate"];

        $reservering = $this->getDoctrine()
            ->getRepository(Reservering::class)
            ->getBetween(array($BeginDate, $EndDate));

        $input = array();
        for ($x = 0; $x < count($reservering); $x++) {
            array_push($input, $reservering[$x][1]);
        }

        $available = $this->getDoctrine()
            ->getRepository(Kamer::class)
            ->notIn($input);

        return $this->render('kamers/kamer1.html.twig', [
            'kamers' => $available,
        ]);
    }





}

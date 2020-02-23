<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StaticbudgetController extends AbstractController
{
    /**
     * @Route("/budget", name="staticbudget")
     */
    public function index()
    {
        return $this->render('staticbudget/index.html.twig', [
            'controller_name' => 'StaticBudgetController',
        ]);
    }
}

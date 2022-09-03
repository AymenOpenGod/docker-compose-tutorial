<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrangePizzaController extends AbstractController
{
    #[Route('/orange/pizza', name: 'app_orange_pizza')]
    public function index(): Response
    {
        return $this->render('orange_pizza/index.html.twig', [
            'controller_name' => 'OrangePizzaController',
        ]);
    }
}

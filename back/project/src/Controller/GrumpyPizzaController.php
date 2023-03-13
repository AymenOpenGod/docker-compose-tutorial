<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GrumpyPizzaController extends AbstractController
{
    #[Route('/grumpy/pizza', name: 'app_grumpy_pizza')]
    public function index(): Response
    {
        return $this->render('grumpy_pizza/index.html.twig', [
            'controller_name' => 'GrumpyPizzaController',
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PracticeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $pricingPlans = $this->$this->getDoctrine()
            ->getRepository(PricingPlan::class)
            ->findAll();

        return $this->render('practice/index.html.twig', [
            'pricing_plans' => $pricingPlans,
        ]);
    }
}

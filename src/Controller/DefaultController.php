<?php

namespace App\Controller;

use App\Service\ClockService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{


    /**
     * DefaultController constructor.
     * @param ClockService $clockService
     */
    public function __construct(private ClockService $clockService)
    {
    }

    #[Route('/default', name: 'default')]
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DefaultController.php',
            'date' => $this->clockService->now()
        ]);
    }
}

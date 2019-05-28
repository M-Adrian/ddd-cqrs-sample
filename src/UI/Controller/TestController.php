<?php

declare(strict_types = 1);

namespace App\UI\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="api")
     */
    public function index()
    {
        $test = 1000;
        return $this->json([
            'message' => 'Welcome to your new controller!',
        ]);
    }

}
<?php

declare(strict_types=1);

namespace App\Landing;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LandingController extends AbstractController
{
    public function __invoke(Request $request): Response
    {
        return $this->render('@landing/landing.html.twig');
    }
}

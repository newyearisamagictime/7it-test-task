<?php

declare(strict_types=1);

namespace App\Order;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ThankYouController extends AbstractController
{
    public function __invoke(Request $request): Response
    {
        return $this->render('@order/thank-you.html.twig');
    }
}

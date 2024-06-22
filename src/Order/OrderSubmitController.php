<?php

declare(strict_types=1);

namespace App\Order;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class OrderSubmitController extends AbstractController
{
    public function __construct(
        private MailerInterface $mailer
    ) {
    }

    public function __invoke(Request $request): Response
    {
        $name = $request->request->get('name');
        $phone = $request->request->get('phone');

        $email = (new Email())
            ->from('landing@plumbus.com')
            ->to('orders@plumbus.com')
            ->subject('New order')
            ->text("Name: $name\nPhone: $phone");

        $this->mailer->send($email);

        return $this->redirectToRoute('app.order_thank_you');
    }
}

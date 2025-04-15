<?php

namespace App\Controller;

use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class EmailTestController extends AbstractController
{
    #[Route('/email/test', name: 'app_email_test')]
    public function sendEmail(MailerInterface $mailer): Response
    {
        try{
            $email = (new Email())
            ->from('test@example.com')
            ->to('recipient@example.com')
            ->subject('Test Email with Mailtrap')
            ->text('This is a test email!')
            ->html('<p>This is a <strong>test email</strong>!</p>');
            
            $mailer->send($email);
            dd($mailer);
    
            return new Response('Email sent successfully!');
        }
        catch (\Exception $e) {
            return new Response('Failed to send email: ' . $e->getMessage());
        }
    }
}

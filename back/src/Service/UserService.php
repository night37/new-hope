<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use App\Service\EmailService;
use App\Service\FlashMessageService;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\HttpFoundation\Request;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class UserService
{

    public function __construct(
        private UserRepository $userRepository,
        private VerifyEmailHelperInterface $verifyEmailHelper,
        private EmailService $emailService,
        private FlashMessageService $flashMessageService,
        private TranslatorInterface $translator,
    ) {}

    public function register(User $user): void
    {
        try {
            $this->userRepository->createUser($user);
            $this->emailService->sendEmailConfirmation($user, false);
            $this->flashMessageService->displayMessage('success', 'Votre compte a été crée avec succès. Un email de confirmation vous a été envoyé. Veuillez vérifier votre boîte de réception.');
        } catch (UniqueConstraintViolationException $e) {
            $this->flashMessageService->displayMessage('error', 'Cet email existe déjà. Veuillez en choisir un autre.');
        }
    }

    public function activateUser(Request $request): void
    {
        $id = $request->query->get('id');
        $user = $this->userRepository->find($id);
        if (null === $id || null === $user) {
            $this->flashMessageService->displayMessage('error', 'une erreur est survenue lors de la vérification de votre compte.(id null)');
        }
        try {
            if (!$user->isVerified()) {
                $this->verifyEmailHelper->validateEmailConfirmationFromRequest($request, $user->getId(), $user->getEmail());
                $this->activeUser($user);
            } else {
                $this->flashMessageService->displayMessage('info', 'Votre compte est déjà vérifié.');
            }
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->flashMessageService->displayMessage('error', $this->translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));
        }
    }

    public function activeUser(User $user): void
    {
        $this->userRepository->activeUser($user);
        $this->flashMessageService->displayMessage('success', 'Votre compte a été vérifié avec succès. Vous pouvez maintenant vous connecter.');
    }
}

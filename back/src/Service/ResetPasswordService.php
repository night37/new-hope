<?php

namespace App\Service;

use App\Entity\User;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;
use App\Service\PasswordService;

class ResetPasswordService
{
    public function __construct(
        private PasswordService $passwordService,
        private ResetPasswordHelperInterface $resetPasswordHelper
    ) {}

    public function resetPassword(User $user, string $plainPassword, string $token): void
    {
        $this->resetPasswordHelper->removeResetRequest($token);
        $this->passwordService->updatePassword($user, $plainPassword);
    }
}

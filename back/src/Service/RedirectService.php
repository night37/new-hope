<?php

namespace App\Service;

use App\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RedirectService
{

    public function redirectToUserEditPage(User $user, string $baseUrl, string $basePath): RedirectResponse
    {
        return new RedirectResponse($baseUrl . $basePath . '/backoffice/user/' . $user->getId() . '/edit');
    }

    public function redirectToPath(string $path): RedirectResponse
    {
        return new RedirectResponse($path);
    }
}

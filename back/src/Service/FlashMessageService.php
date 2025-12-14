<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;


class FlashMessageService
{

    public function __construct(
        private RequestStack $requestStack,
    ) {}

    public function displayMessage(string $type, string $message): void
    {
        $request = $this->requestStack->getCurrentRequest();
        if ($request && $request->hasSession()) {
            $request->getSession()->getFlashBag()->add($type, $message);
        }
    }
}

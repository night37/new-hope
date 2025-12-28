<?php

namespace App\Service;

use App\Entity\Structure;
use App\Repository\StructureRepository;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;


class StructureService
{
    public function __construct(
        private EmailService $emailService,
        private FlashMessageService $flashMessageService,
        private StructureRepository $structureRepository,
    ) {}


    public function getAllStructures(): array | string
    {
        return $this->structureRepository->getAllStructures();
    }

    public function createStructure(Structure $structure): void
    {
        try {
            $this->structureRepository->createStructure($structure);
            $this->emailService->sendStructureEmailConfirmation($structure, false);
            $this->flashMessageService->displayMessage('success', 'Votre compte a été crée avec succès. Un email de confirmation vous a été envoyé. Veuillez vérifier votre boîte de réception.');
        } catch (UniqueConstraintViolationException $e) {
            $this->flashMessageService->displayMessage('error', 'Cet email existe déjà. Veuillez en choisir un autre.');
        }
    }

    public function activeStructure(): void
    {
        $this->flashMessageService->displayMessage('success', 'Votre compte a été vérifié avec succès. un administrateur contrôle la conformité des informations, vous recevrez une notification par email.');
    }
}

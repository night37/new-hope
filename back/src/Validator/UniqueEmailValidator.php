<?php

namespace App\Validator;

use App\Entity\User;
use App\Entity\Structure;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

final class UniqueEmailValidator extends ConstraintValidator
{


    public function __construct(
        private EntityManagerInterface $em
    ) {}

    public function validate(mixed $value, Constraint $constraint): void
    {
        if (!$value) {
            return;
        }

        // Vérifie dans les deux tables
        $userExists = $this->em->getRepository(User::class)
            ->findOneBy(['email' => $value]);

        $structureExists = $this->em->getRepository(Structure::class)
            ->findOneBy(['email' => $value]);

        if ($userExists || $structureExists) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        };
    }
}

<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final class UniqueEmail extends Constraint
{
    public string $message = 'Une erreur est survenue lors de la création du compte';
}

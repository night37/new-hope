<?php

namespace App\Enum;

enum AdoptionStatus: string
{
    case Available = 'disponible';
    case Adopted = 'adopté';
    case Pending = 'en attente';
}
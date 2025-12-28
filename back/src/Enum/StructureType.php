<?php

namespace App\Enum;

enum StructureType: string
{
    case Refuge = 'refuge';
    case FosterFamily = 'famille d_accueil';
    case Association = 'association';
    case Veterinarian = 'vétérinaire';
    case Other = 'autre';
}

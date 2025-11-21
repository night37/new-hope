<?php

namespace App\Enum;

enum StructureType: string
{
    case Refuge = 'refuge';
    case Famille_d_accueil = 'famille d_accueil';
    case Association = 'association';
    case Veterinaire = 'vétérinaire';
    case Autre = 'autre';

    
} 
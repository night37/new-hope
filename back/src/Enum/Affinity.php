<?php

namespace App\Enum;

enum Affinity: string
{
    case Children = 'enfants';
    case Seniors = 'seniors';
    case Dogs = 'chiens';
    case Cats = 'chat';
    
}
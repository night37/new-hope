<?php

namespace App\Enum;

enum Affinity: string
{
    case Children = 'enfants';
    case Adults = 'adultes';
    case Seniors = 'seniors';
    case Dogs = 'chiens';
    case Cats = 'chats';
    
}
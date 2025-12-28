<?php

namespace App\Enum;

enum Role: string
{
    case ROLE_ADMIN = 'ADMIN';
    case ROLE_USER = 'USER';
    case ROLE_FRONTEND = 'FRONT_END';
    case ROLE_STRUCTURE = 'STRUCTURE';
}

<?php

namespace App\DTO;

use Symfony\Component\Serializer\Annotation\Groups;

class StructureDTO
{
    public function __construct(
        #[Groups(['animal:read'])]
        public readonly string $name,
        #[Groups(['animal:read'])]
        public readonly string $street,
        #[Groups(['animal:read'])]
        public readonly string $city,
        #[Groups(['animal:read'])]
        public readonly string $zipCode,
        #[Groups(['animal:read'])]
        public readonly string $phone,
        #[Groups(['animal:read'])]
        public readonly string $email,

    ) {}
}

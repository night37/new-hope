<?php
namespace App\DTO;

class StructureDTO
{
    public function __construct(
        public readonly string $name,
        public readonly string $street,
        public readonly string $city,
        public readonly string $zip_code,
        public readonly string $phone,
        public readonly string $email,
    ) {}
}
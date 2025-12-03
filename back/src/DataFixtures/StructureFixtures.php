<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Structure;
use App\Enum\StructureType;
use Faker;

class StructureFixtures extends Fixture
{
    public const STRUCTURE_REFERENCE = 'structure_';

    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 20; $i++) {
            $structure = new Structure();
            $structure->setName($faker->company);
            $structure->setStreet($faker->streetAddress);
            $structure->setZipCode($faker->postcode);
            $structure->setCity($faker->city);
            $structure->setPhone($faker->phoneNumber);
            $structure->setEmail($faker->email);
            $structure->setDescription($faker->text(200));
            $structure->setLatitude($faker->latitude);
            $structure->setLongitude($faker->longitude);
            $structure->setCreatedAt(new \DateTimeImmutable());
            $structure->setUpdatedAt(new \DateTimeImmutable());
            $structure->setIsActive($faker->randomElement([true, false]));
            $structure->setIsVerified($faker->randomElement([true, false]));
            $structure->setStructureType($faker->randomElement([
                StructureType::Refuge,
                StructureType::Association,
                StructureType::Famille_d_accueil,
                StructureType::Veterinaire,
                StructureType::Autre
            ]));
            $structure->setPassword($faker->password());

            $manager->persist($structure);

            // Ajouter une référence individuelle pour chaque structure
            $this->addReference(self::STRUCTURE_REFERENCE . $i, $structure);
        }

        $manager->flush();
    }
}

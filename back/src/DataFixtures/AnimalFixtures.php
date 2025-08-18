<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Animal;
use App\Entity\Structure;
use App\DataFixtures\StructureFixtures;
use Faker;
use App\Enum\Type;
use App\Enum\Gender;
use App\Enum\AdoptionStatus;
use App\Enum\Color;
use App\Enum\Size;
use App\Enum\Affinity;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AnimalFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
 
        for ($i = 0; $i < 100; $i++) {
            $animal = new Animal();
            $animal->setType($faker->randomElement([
                Type::Dog,
                Type::Cat,
            ]));
            $animal->setName($faker->firstName);
            $animal->setGender($faker->randomElement([
                Gender::Male,
                Gender::Female
            ]));
            $animal->setAge($faker->numberBetween(1, 15));
            $animal->setDescription($faker->text(200));
            $animal->setCreatedAt(new \DateTimeImmutable());
            $animal->setUpdatedAt(new \DateTimeImmutable());
            $animal->setIsVisible($faker->randomElement([true, false]));
            $animal->setIsActive($faker->randomElement([true, false]));
            $animal->setAdoptionStatus($faker->randomElement([
                AdoptionStatus::Available,
                AdoptionStatus::Pending,
                AdoptionStatus::Adopted
            ]));
            $animal->setColor($faker->randomElement([
                Color::Black,
                Color::White,
                Color::Brown,
                Color::Gray,
            ]));
            $animal->setSize($faker->randomElement([
                Size::Small,
                Size::Medium,
                Size::Large,
            ]));
            $animal->setAffinity([$faker->randomElement([
                Affinity::Children,
                Affinity::Adults,
                Affinity::Seniors,
                Affinity::Dogs,
                Affinity::Cats,
            ])]);
            $animal->setOutDepartment($faker->randomElement([true, false]));
            $animal->setHighlight($faker->randomElement([true, false]));
            $animal->setThumbnail($faker->imageUrl(640, 480, 'animals', true));
            
            // Récupérer une référence de structure aléatoire
            $randomStructureIndex = $faker->numberBetween(0, 19); // 0-19 pour 20 structures
            $structure = $this->getReference(StructureFixtures::STRUCTURE_REFERENCE . $randomStructureIndex, Structure::class);
            $animal->setStructure($structure);
            
            $animal->setImages([$faker->imageUrl(640, 480, 'animals', true)]);
            $manager->persist($animal);
        }
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            StructureFixtures::class,
        ];
    }
}

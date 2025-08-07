<?php 

namespace App\DataFixtures;
use Faker;
use App\Enum\Size;

use App\Enum\Type;
use App\Enum\Color;
use App\Enum\Gender;
use App\Entity\Animal;
use App\Enum\Affinity;
use App\Entity\Structure;
use App\Enum\StructureType;
use App\Enum\AdoptionStatus;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture {
  
  
    public function load(ObjectManager $manager):void  {

      $faker = Faker\Factory::create('fr_FR');
      $structures = [];

      for ($i = 0; $i < 20 ; $i++) {
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
          $structure->setIsActif($faker->randomElement([true, false]));
          $structure->setStructureType($faker->randomElement([                
            StructureType::Refuge,
            StructureType::Association,
            StructureType::Famille_d_accueil,
            StructureType::Veterinaire,
            StructureType::Autre]));
          $manager->persist($structure);
          $structures[] = $structure;
      }

      $animals = [];
      for ($i = 0; $i < 100 ; $i++) {
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
          $animal->setOutDepartment($faker->randomElement([true, false]));
          $animal->setHighlight($faker->randomElement([true, false]));
          $animal->setStructureId($faker->randomElement($structures));
          $animal->setThumbnail($faker->imageUrl(640, 480, 'animals', true));
          $animal->setImages([$faker->imageUrl(640, 480, 'animals', true)]);
          $manager->persist($animal);
          $animals[] = $animal;
        }



      $manager->flush();

    
      
        
      
    }
} 
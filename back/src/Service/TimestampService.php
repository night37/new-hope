<?php

namespace App\Service;


class TimestampService
{

  private $entityInstance;
  private $now;

  public function __construct($entityInstance){
    $this->entityInstance = $entityInstance;
  }

  public function getCreatedAt(): \DateTimeInterface
  {
  
      $now = new \DateTimeImmutable();
      $this->entityInstance->setCreatedAt($now);
      $this->entityInstance->setUpdatedAt($now);
      return $this->entityInstance->getCreatedAt();
    
  }

    public function getupdatedAt(): \DateTimeInterface
  {
  
      $now = new \DateTimeImmutable();
      $this->entityInstance->setUpdatedAt($now);
      return $this->entityInstance->getCreatedAt();
    
  }


}
<?php

namespace App\Service;


class TimestampService
{

  public function getCreatedAt($entityInstance): \DateTimeInterface
  {

    $now = new \DateTimeImmutable();
    $entityInstance->setCreatedAt($now);
    $entityInstance->setUpdatedAt($now);
    return $entityInstance->getCreatedAt();
  }

  public function getupdatedAt($entityInstance): \DateTimeInterface
  {

    $now = new \DateTimeImmutable();
    $entityInstance->setUpdatedAt($now);
    return $entityInstance->getCreatedAt();
  }
}

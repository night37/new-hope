"use client"

import React from 'react';
import { useAnimalStore } from '@/store/animalStore';

export interface AnimalDetailsProps {
}

export default function AnimalDetails (props: AnimalDetailsProps) {

  const id = useAnimalStore((state) => state.id)
  console.log(id);

  return (
    <div className="title-container">

      
    </div>
  );
}

"use client"

import React, { useEffect, useState } from 'react';
import { useAnimalStore } from '@/store/animalStore';
import { findById } from "@/api/filters/animals"
import Header from "./Header"
import Content from "./Content/Content"
interface AnimalDetailsProps {
  id: number;
  name: string;
  gender: 'male' | 'female';
  age: number;
  out_department: boolean;
  size: 'petit' | 'moyen' | 'grand';
  color: string;
  affinity: ('enfants' | 'seniors' | 'autres_animaux')[];
  adoption_status: 'adopté' | 'en attente' | 'réservé';
  breed: string[];
  type: 'chat' | 'chien';
  thumbnail: string;
  images: string[];
  description: string;
  structureName: string;
  structureStreet: string;
  structureZipCode: number;
  structureCity: string;
  structurePhone: string;
  structureEmail: string;
}

export default function AnimalDetails() {

  const [animal, setAnimal] = useState<AnimalDetailsProps | null>(null)
  const id = useAnimalStore((state) => state.id)

  useEffect(() => {
    const fetchData = async () => {
      try {
        const result = await findById(2)
        setAnimal(result.animal[id])

      }
      catch (err) {
        console.error("erreur lors de la récupération des data de l'animal", err)
      }
    }
    fetchData()

  }, [id])

  return (
    <>
      {
        animal ?
          <div>
            <Header name={animal.name} />
            <Content animal={animal} />

          </div>
          :
          <div>test</div>
      }
    </>
  );
}

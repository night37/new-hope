"use client"

import React, { useEffect, useState } from 'react';
import { useAnimalStore } from '@/store/animalStore';
import { findById } from "@/api/filters/animals"

export interface AnimalDetailsProps {
}

export default function AnimalDetails (props: AnimalDetailsProps) {

  const id = useAnimalStore((state) => state.id)
  const [animal, setAnimal] = useState(null)


  useEffect(() => {
    const fetchData = async () => {
      try{
        const result = await findById(4)
        
        console.log(result);
      }
      catch(err){
      console.error("erreur lors de la récupération de l'animal", err)
      }
    }
      fetchData()

  })
  

  return (
    <div className="title-container">

      
    </div>
  );
}

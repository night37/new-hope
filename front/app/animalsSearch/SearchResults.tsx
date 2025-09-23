"use client"

import React, {useState, useEffect} from "react"
import { useAnimalStore } from "@/store/animalStore"
import { AnimalCard } from "@/Components/animalCard/AnimalCard"

interface Animal {
  id: number,
  name: string,
  type: string,
  structureName: string,
  thumbnail: string,
  breed: string,
}

interface AnimalsList {
  animals: Animal[]
}


export default function SearchResults() {

  const searchResults = useAnimalStore((state) => state.searchResults);
  const [animalsList, setAnimalsList] = useState<AnimalsList>({animals: []});


  useEffect(() => {
    if ( searchResults) {
      setAnimalsList({animals: searchResults.animals});
    }
    
  }, [searchResults])

  

  return (
    <>
      {animalsList.animals.length > 0 ? (
        <div className="container my-10 mx-auto flex flex-col gap-10 ">
          <div className="flex items-center gap-3">
            <h2 className="text-lg font-bold font-handlee">Résultats de la recherche </h2>
            <p className="text-sm"> { animalsList.animals.length } résultats Trouvés</p>
          </div>
          <div className="result-container flex gap-[40px] flex-wrap">
            {animalsList.animals.map((animal,key) => (
              <div className="w-[265px]" key={key}>
                <AnimalCard 
                  key={key}
                  image={{src: animal.thumbnail, alt: animal.name}}
                  animal={{id: animal.id, name: animal.name, breed: animal.breed ? [animal.breed] : [], sexe: animal.type, associationName: animal.structureName}}
                  path={`/animal/${animal.name}`}
                />
              </div>
            ))}
          </div>
        </div>
      ) : (
        <div className={`container my-10 text-center font-caveat text-xl mx-auto ${searchResults ? '' : 'hidden'}`}>Aucun résultat trouvé</div>
      )}
    </>
  )
}

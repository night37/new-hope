"use client"

import React, {useEffect, useState} from 'react';
import {getLastAnimalsList} from "@/app/api/filters/animals"
import  HighLight  from "@/Components/highLight/HighLight"



type Animal = {
  type: string;
};

export default function HighLightAnimals()  {

    const [loading, setLoading] = useState(false)
    const [dogsList, setDogsList] = useState([])
    const [catsList, setCatsList] = useState([])

    const [error, setError] = useState("")

useEffect(() => {
  const fetchData = async () => {
    try {
      setLoading(true);
      const data = await getLastAnimalsList();
      const dogs: Animal[] = []
      const cats: Animal[] = []
      data.animals.forEach((el: Animal) => { el.type == "chien" ? dogs.push(el) : cats.push(el) });
      setDogsList(dogs);
      setCatsList(cats);
    } catch  {
        setError("Erreur lors du chargement");
    } finally {
        setLoading(false);
    }
};
fetchData();
}, []);

    return (
        <>
          <HighLight
            introduction= {{
              title :"Nos chiens mis en avant", 
              content: "Ces chiens sont pleins d’amour et n’attendent qu’une famille aimante pour partager leur bonheur. Chacun d’eux a une histoire et une personnalité unique, mais tous ont un point commun : une immense envie d’offrir leur affection et de recevoir la vôtre. Offrez-leur une seconde chance, ils vous le rendront au centuple !"

            }} 
            animals={dogsList}
          />
          <HighLight 
           introduction= {{
             title:"Nos chat mis en avant",
             content:"Ces chats attendent avec impatience une famille qui saura leur offrir douceur et sécurité. Chacun d’eux a beaucoup d’amour à donner et ne demande qu’à partager des moments de tendresse. Offrez-leur un foyer, et ils deviendront vos plus fidèles compagnons à quatre pattes !"

           }}
            animals={catsList}
          />
          
        </>
    );
}


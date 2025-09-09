"use client"

import { useState } from "react"
import { ButtonRadio } from "@/Components/ui/ButtonRadio/ButtonRadio";
import AnimalForm from "@/Components/forms/AnimalForm"
import AssociationForm  from "@/Components/forms/AssociationForm"




export function Hero () {

  const [radioBtns, setRadioBtns] = useState(
    [
      {name: "radio1",label: "Rechercher un animal", isActive: true},
      {name: "radio2", label:"Rechercher une association", isActive: false}
    ]
  )


  const handleRadioClick = (selectedIndex : number) => {
    setRadioBtns(prev => 
      prev.map((radio, key) => ({
        ...radio,
        isActive: key === selectedIndex
      }))
    );
  };


  return (
    <div className="bg-[url(/hero.png)] bg-no-repeat bg-fit  py-[98px] w-full flex justify-center">
      <div className="container bg-white/50 px-[50px] flex flex-col py-[50px] rounded-xl gap-5">
          <div className="radio-container flex justify-center flex-wrap  gap-5 flex-col lg:flex-row items-center">
            {radioBtns.map((radio, key) =>  {
              return(
              <div key={key} className="flex w-fit"  onClick={()=>handleRadioClick(key)}>
                <ButtonRadio label={radio.label} isActive={radio.isActive} />
              </div>
              )
            })}
          </div>
          <div className="form-container container flex grid-cols-12 flex-wrap gap-3">
            {radioBtns[0].isActive ? <AnimalForm/> : <AssociationForm/>}
          </div>
      </div>
      
    </div>
  );
}

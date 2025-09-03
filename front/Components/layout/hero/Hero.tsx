"use client"

import { useState } from "react"
import { ButtonRadio } from "@/components/ui/ButtonRadio";
import AnimalForm from "@/components/forms/AnimalForm"
import AssociationForm  from "@/components/forms/AssociationForm"




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
    <div className="bg-[url(/hero.png)] bg-no-repeat bg-fit p-[100px] flex justify-center">
      <div className="container bg-white/50 flex flex-col py-[50px]">
          <div className="radio-container flex gap-10 justify-center">
            {radioBtns.map((radio, key) =>  {
              return(
              <div key={key} className="flex w-fit"  onClick={()=>handleRadioClick(key)}>
                <ButtonRadio label={radio.label} isActive={radio.isActive} />
              </div>
              )
            })}
          </div>
          <div className="form-container">
            {radioBtns[0].isActive ? <AnimalForm/> : <AssociationForm/>}
          </div>
      </div>
      
    </div>
  );
}

import * as React from "react";
import Image from "next/image";
import { Button } from "../ui/Button/Button";
import { useRouter } from 'next/navigation'
import { create } from 'zustand'


interface AnimalCardProps {
    image: {
        src: string,
        alt: string
    },
    animal:{
        id: number,
        name: string,
        race: string,
        sexe: string,
        associationName?: string

    }
    path: string
}



export const AnimalCard = ({image, animal, path} : AnimalCardProps) => {
    const router = useRouter()


    const onClick = () => {
        sessionStorage.setItem('animal-id', animal.id.toString())
        router.push(path)
    }   

    return (
        <article className="container flex flex-col bg-white shadow-card">
            <div className="image-container">
                <Image className="object-cover" src={"/img/placeholder.svg"} alt={image.alt} height={210} width={263}/>
            </div>
            <div className="details-container px-[23px] py-[16px]">
                <h3 className="title-container font-caveat text-large "> {animal.name}</h3>
                <div className="animal-detail-container">
                    <span className="text-base font-handlee">{animal.race}</span>
                    <span className="text-base font-handlee">{animal.sexe}</span>
                </div>
                <div className="font-handlee font-bold">{animal.associationName}</div>
                <div className="w-4/4"><Button onClick={onClick} label="faire connaissance" type="button" fontsize={"text-xl"}/></div>

            </div>            
        </article>
    );
};
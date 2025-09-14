import * as React from "react";
import Image from "next/image";
import { Button } from "../ui/Button/Button";
import { useRouter } from 'next/navigation' // App Router

interface AnimalCardProps {
    image: {
        src: string,
        alt: string
    },
    animal:{
        name: string,
        race: string,
        sexe: string,
        associationName: string

    }
    path: string
}



export const AnimalCard = ({image, animal, path} : AnimalCardProps) => {
    const router = useRouter()


    const onClick = () => {
        router.push(path)
    }    
    return (
        <article className="container flex">
            <div className="image-container">
                <Image className="object-cover" src={image.src} alt={image.alt} height={210}/>
            </div>
            <div className="details-container px-[23px] py-[16px]">
                <h3 className="title-container font-caveat text-large "> {animal.name}</h3>
                <div className="animal-detail-container">
                    <span className="text-base font-handlee">{animal.race}</span>
                    <span className="text-base font-handlee">{animal.sexe}</span>
                </div>
                <div className="font-handlee">{animal.associationName}</div>
                <Button onClick={onClick} label="faire connaissance" type="button"/>

            </div>            
        </article>
    );
};
import * as React from "react";
import Image from "next/image";
import { Button } from "../ui/Button/Button";
import { useRouter } from 'next/navigation' // App Router

interface NewsCardProps {
    image: {
        src: string,
        alt: string
    },
    title: string,
    date: string,
    resume: string,
    path: string
}



export const NewsCard = ({image, title, date, resume, path} : NewsCardProps) => {
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
                <h3 className="title-container font-caveat text-large "> {title} <span className="font-handlee text-[8px]">{date}</span></h3>
                <div className="resume-container">
                    <p className="text-base font-handlee">{resume}</p>
                </div>
                <Button onClick={onClick} label="faire connaissance" type="button"/>

            </div>            
        </article>
    );
};
import React from "react";
import Image from "next/image";

interface ColumnData  {
    paragraph?: {
        title: string,
        content: string,
    }
    picture?: {
        src:string,
        alt: string
    }
}

function Column({paragraph, picture} :ColumnData) {
    return (
        <div className="column w-full relative">
            {paragraph &&
            <div className="paragraph-container h-fit py:10 lg:py-[112.5px] lg:px-[20px]">
                <h2 className="font-caveat">{paragraph.title}</h2>
                <p className="font-handlee">{paragraph.content}</p>
            </div>
            }
            {picture && 
            <div className="picture-container h-[420px]"> 
                <Image className="object-cover" fill src={picture.src} alt={picture.alt} /> 
            </div> 
            } 
            
            
        </div>
    );
}

export default Column;
import React from 'react';
import Carousel from "@/Components/AnimalCarousel/AnimalCarousel";

interface HighLightProps {
    introduction: {
        title: string,
        content: string,
    }
    animals: object[]
}

function HightLight({introduction, animals}: HighLightProps) {
    console.log(animals);
    return (
        <div className="highLight-container">            
            <h2 className="highLight-title font-caveat">
                {introduction.title}
                <p className="font-handlee">{introduction.content}</p>
            </h2>

            {animals.length > 0 && <Carousel items={animals}/>}
        </div>
    );
}

export default HightLight;
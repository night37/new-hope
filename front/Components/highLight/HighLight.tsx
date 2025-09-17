import React from 'react';
import Slider from "@/Components/AnimalSlider/AnimalSlider";

interface HighLightProps {
    introduction: {
        title: string,
        content: string,
    }
    animals: object[]
}

function HightLight({introduction, animals}: HighLightProps) {
    return (
        <div className="highLight-container">            
            <h2 className="highLight-title font-caveat">
                {introduction.title}
                <p className="font-handlee">{introduction.content}</p>
            </h2>

            {animals.length > 0 && <Slider items={animals}/>}
        </div>
    );
}

export default HightLight;
import React from 'react';
import Slider from "@/Components/AnimalSlider/AnimalSlider";

interface HighLightProps {
    introduction: {
        title: string,
        content: string,
    }
    animals: Animal[],
    error: string,
    loading: boolean
}


interface Animal {
    id: number,
    name: string
    thumbnail: string;
    breed: string[],
    gender: string,
    structureName: string,
    type: string
}

function HighLight({ introduction, animals, error, loading }: HighLightProps) {
    return (
        <div className="highLight-container px-3 lg:px-0">
            <h2 className="highLight-title font-caveat">
                {introduction.title}
                <p className="font-handlee">{introduction.content}</p>
            </h2>

            {animals.length > 0 && error != "" ?
                <Slider items={animals} /> : loading
                    ? <div className="w-full flex justify-center"><span className="loading loading-spinner text-custom-secondary p-4 my-10"></span></div>
                    : <span className="font-caveat text-xl flex justify-center w-full"><p className="border p-4 my-10 border-black">Une erreur serveur est survenue </p></span>}
        </div>
    );
}

export default HighLight;
import React from 'react';
import Slider from '@/Components/animalSlider/AnimalSlider';
import { HighLightProps } from '@/types/highLight.type';




function HighLight({ introduction, animals, error, loading }: HighLightProps) {
    return (
        <div className="highLight-container px-3 lg:px-0">
            <h2 className="highLight-title font-caveat">
                {introduction.title}
                <p className="font-handlee">{introduction.content}</p>
            </h2>

            {animals.length > 0 && error != '' ? (
                <Slider items={animals} />
            ) : loading ? (
                <div className="flex w-full justify-center">
                    <span className="loading loading-spinner my-10 p-4 text-custom-secondary"></span>
                </div>
            ) : (
                <span className="flex w-full justify-center font-caveat text-xl">
                    <p className="my-10 border border-black p-4">
                        Une erreur serveur est survenue{' '}
                    </p>
                </span>
            )}
        </div>
    );
}

export default HighLight;

import React from 'react';
import TopContainer from './details/TopContainer';
import BottomContainer from './details/BottomContainer';
import { Animal } from '@/types/animal.type';



function Content({ animal }: { animal: Animal }) {
    console.log(animal);
    return (
        <div className="container mx-auto">
            <TopContainer animal={animal} />
            <BottomContainer animal={animal} />
        </div>
    );
}

export default Content;

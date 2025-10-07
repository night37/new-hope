import React from 'react';
import './style.scss';
import { Animal as AnimalDetailsProps } from '@/types/animal.type';

function BottomContainer({ animal }: { animal: AnimalDetailsProps }) {
    return (
        <div className="bottom-container flex flex-col lg:my-10 lg:my-20 lg:flex-row">
            <div className="description-container mx-auto flex w-2/4 flex-col items-center border-custom-primary lg:mb-10 lg:w-3/4 lg:items-start lg:border-r-2 lg:pr-10">
                <h3 className="mb-5 font-caveat text-xl text-font-green">Qui suis-je ?</h3>
                <p className="text-justify font-handlee text-sm">{animal.description}</p>
            </div>
            <div className="specificity-container mb-10 flex flex-col items-center lg:w-1/4 lg:pl-10">
                <h3 className="mb-5 font-caveat text-xl text-font-green">
                    Points d&apos;attention
                </h3>
                <ul className="list-inside list-disc">
                    <li className="font-handlee text-sm">Particularité 1</li>
                    <li className="font-handlee text-sm">Particularité 2</li>
                    <li className="font-handlee text-sm">Particularité 3</li>
                </ul>
            </div>
        </div>
    );
}

export default BottomContainer;

import React from 'react';
import './style.scss';




interface AnimalDetailsProps {
    animal: {
        id: number;
        name: string;
        gender: 'male' | 'female';
        age: number;
        out_department: boolean;
        size: 'petit' | 'moyen' | 'grand';
        color: string;
        affinity: ('enfants' | 'seniors' | 'autres_animaux')[];
        adoption_status: 'adopté' | 'en attente' | 'réservé';
        breed: string[];
        type: 'chat' | 'chien';
        thumbnail: string;
        images: string[];
        description: string;
        structureName: string;
        structureStreet: string;
        structureZipCode: number;
        structureCity: string;
        structurePhone: string;
        structureEmail: string;

    }
}


function BottomContainer({ animal }: AnimalDetailsProps) {




    return (
        <div className="bottom-container my-10 lg:my-20 flex-col lg:flex-row flex">
            <div className="description-container mb-10 lg:w-3/4 w-2/4 mx-auto lg:border-r-2 border-custom-primary lg:pr-10 flex lg:items-start items-center flex-col">
                <h3 className="text-xl font-caveat text-font-green mb-5">Qui suis-je ?</h3>
                <p className="font-handlee text-sm text-justify">{animal.description}</p>
            </div>
            <div className="specificity-container mb-10 flex items-center flex-col lg:pl-10 lg:w-1/4">
                <h3 className="text-xl font-caveat text-font-green mb-5">Points d&apos;attention</h3>
                <ul className="list-disc list-inside">
                    <li className="font-handlee text-sm">Particularité 1</li>
                    <li className="font-handlee text-sm">Particularité 2</li>
                    <li className="font-handlee text-sm">Particularité 3</li>
                </ul>
            </div>
        </div>



    );
}

export default BottomContainer;
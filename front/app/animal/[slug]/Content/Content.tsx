import React from 'react';
import TopContainer from "./details/TopContainer";
import BottomContainer from "./details/BottomContainer";


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

function Content({ animal }: AnimalDetailsProps) {
    return (
        <div className="container mx-auto">
            <TopContainer animal={animal} />
            <BottomContainer animal={animal} />
        </div>
    );
}

export default Content;
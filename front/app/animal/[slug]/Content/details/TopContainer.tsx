import React from 'react';
import Image from 'next/image';
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
        affinity: string[]
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

type affinityType = { [key: string]: string }[];


function TopContainer({ animal }: { animal: AnimalDetailsProps['animal'] }) {

    const affinityList: affinityType = [{ Children: "enfants" }, { Seniors: "seniors" }, { Dogs: "chiens" }, { Cats: "chats" }];


    return (
        <>
            <div className="top-container justify-between items-center flex flex-col lg:flex-row my-10 lg:my-0">
                <div className="image-container lg:col-span-3 lg:hidden mb-10">
                    <Image className="object-cover" src={"/img/placeholder.svg"} alt={animal.name} height={319} width={400} />
                </div>
                <div className="identity-container lg:border-r-2 border-custom-primary lg:pr-10  items-center flex flex-col">
                    <h3 className="text-xl font-caveat text-font-green">Fiche d&apos;identité</h3>
                    <ul className="columns-2 text-sm">
                        <li className="font-handlee">espèce : {animal.type} </li>
                        <li className="font-handlee">race : {animal.breed} </li>
                        <li className="font-handlee">âge : {animal.age} ans </li>
                        <li className="font-handlee">sexe : {animal.gender} </li>
                        <li className="font-handlee">taille : {animal.size} </li>
                        <li className="font-handlee">couleur : {animal.color} </li>
                        <li className="font-handlee">Pelage : {animal.color} </li>
                        <li className="font-handlee">status: {animal.adoption_status} </li>
                    </ul>
                </div>
                <div className="particularity-container lg:border-r-2 border-custom-primary lg:pr-10 items-center flex flex-col">
                    <h3 className="text-xl font-caveat text-font-green">Affinités</h3>
                    <ul className="columns-1 gap-3">
                        {affinityList.map((affinity, index) => (
                            <li key={index} className="font-handlee text-sm">
                                {animal.affinity.includes(Object.keys(affinity)[0]) ?
                                    `s'entend avec ${Object.values(affinity)[0]}` : `ne s'entend pas avec ${Object.values(affinity)[0]}`}
                            </li>
                        ))}
                    </ul>
                </div>
                <div className="meet-me-container items-center flex flex-col">
                    <h3 className="text-xl font-caveat text-font-green">Me rencontrer</h3>
                    <p className="font-handlee text-center text-sm">
                        {animal.structureName} <br />
                        {animal.structureStreet} <br />
                        {animal.structureZipCode} {animal.structureCity} <br />
                        {animal.structurePhone} <br />
                        {animal.structureEmail}
                    </p>
                </div>
                <div className="image-container hidden lg:block">
                    <Image className="object-cover" src={"/img/placeholder.svg"} alt={animal.name} height={319} width={400} />
                </div>
            </div>
        </>
    );
}

export default TopContainer;
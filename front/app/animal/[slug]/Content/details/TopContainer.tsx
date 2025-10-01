import React from 'react';
import Image from 'next/image';
import './style.scss';
import { Animal } from '@/types/animal.type';
import { affinityType } from '@/types/affinity.type';

function TopContainer({ animal }: { animal: Animal }) {
    const affinityList: affinityType = [
        { Children: 'enfants' },
        { Seniors: 'seniors' },
        { Dogs: 'chiens' },
        { Cats: 'chats' },
    ];
    console.log(animal);
    return (
        <>
            <div className="top-container flex flex-col items-center justify-between lg:my-0 lg:my-10 lg:flex-row">
                <div className="image-container mb-2 mt-8 lg:col-span-3 lg:hidden">
                    <Image
                        className="object-cover"
                        src={'/img/placeholder.svg'}
                        alt={animal.name}
                        height={319}
                        width={400}
                    />
                </div>
                <div className="identity-container flex flex-col items-center border-custom-primary lg:border-r-2 lg:pr-10">
                    <h3 className="font-caveat text-xl text-font-green">Fiche d&apos;identité</h3>
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
                <div className="particularity-container flex flex-col items-center border-custom-primary lg:border-r-2 lg:pr-10">
                    <h3 className="font-caveat text-xl text-font-green">Affinités</h3>
                    <ul className="columns-1 gap-3">
                        {affinityList.length > 0 &&
                            affinityList.map((affinity, index) => (
                                <li key={index} className="font-handlee text-sm">
                                    {animal?.affinity?.includes(Object.keys(affinity)[0])
                                        ? `s'entend avec ${Object.values(affinity)[0]}`
                                        : `ne s'entend pas avec ${Object.values(affinity)[0]}`}
                                </li>
                            ))}
                    </ul>
                </div>
                <div className="meet-me-container flex flex-col items-center">
                    <h3 className="font-caveat text-xl text-font-green">Me rencontrer</h3>
                    <p className="text-center font-handlee text-sm">
                        {animal.structure?.name} <br />
                        {animal.structure?.street} <br />
                        {animal.structure?.zipCode} {animal.structure?.city} <br />
                        {animal.structure?.phone} <br />
                        {animal.structure?.email}
                    </p>
                </div>
                <div className="image-container hidden lg:block">
                    <Image
                        className="object-cover"
                        src={'/img/placeholder.svg'}
                        alt={animal.name}
                        height={319}
                        width={400}
                    />
                </div>
            </div>
        </>
    );
}

export default TopContainer;

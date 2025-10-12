'use client';

import React, { useEffect, useState } from 'react';
import { useAnimalStore } from '@/store/animalStore';
import { findById } from '@/api/animals/findAnimalById';
import Header from './Header';
import Content from './Content/Content';
import { Animal as AnimalDetailsProps } from '@/types/animal.type';
import router from 'next/router';

export default function AnimalDetails() {
    const [animal, setAnimal] = useState<AnimalDetailsProps | null>(null);
    const getId = useAnimalStore((state) => state.id);

    useEffect(() => {
        const fetchData = async () => {
            let id = getId;
            const storedData = localStorage.getItem('animal-store');
            try {
                if (!id && storedData) {
                    const parsedData = JSON.parse(storedData);
                    id = Number(parsedData.state.id);
                    const result = await findById(id);
                    setAnimal(result.animal);
                } else if (id) {
                    const result = await findById(id);
                    setAnimal(result.animal);
                } else {
                    router.push('/');
                }
            } catch (err) {
                console.error("erreur lors de la récupération des data de l'animal", err);
            }
        };
        fetchData();
    }, [getId]);

    return (
        <>
            {animal && (
                <div>
                    <Header name={animal.name} />
                    <Content animal={animal} />
                </div>
            )}
        </>
    );
}

'use client';

import React, { useEffect, useState } from 'react';
import { useAnimalStore } from '@/store/animalStore';
import { findById } from '@/api/filters/animals';
import Header from './Header';
import Content from './Content/Content';
import { Animal as AnimalDetailsProps } from '@/types/animal.type';

export default function AnimalDetails() {
    const [animal, setAnimal] = useState<AnimalDetailsProps | null>(null);
    const id = useAnimalStore((state) => state.id);

    useEffect(() => {
        const fetchData = async () => {
            try {
                const result = await findById(id);
                console.log('result', result);
                setAnimal(result.animal);
            } catch (err) {
                console.error("erreur lors de la récupération des data de l'animal", err);
            }
        };
        fetchData();
    }, [id]);

    return (
        <>
            {animal ? (
                <div>
                    <Header name={animal.name} />
                    <Content animal={animal} />
                </div>
            ) : (
                <div>test</div>
            )}
        </>
    );
}

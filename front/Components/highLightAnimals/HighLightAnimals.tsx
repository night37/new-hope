'use client';

import React, { Suspense, useEffect, useState } from 'react';
import { getLastAnimalsList } from '@/api/filters/animals';
import HighLight from '@/Components/highLight/HighLight';
import { Animal } from '@/types/animal.type';

export default function HighLightAnimals() {
    const [loading, setLoading] = useState(false);
    const [dogsList, setDogsList] = useState<Animal[]>([]);
    const [catsList, setCatsList] = useState<Animal[]>([]);

    const [error, setError] = useState('false');

    useEffect(() => {
        const fetchData = async () => {
            try {
                setLoading(true);
                const data = await getLastAnimalsList();
                const dogs: Animal[] = [];
                const cats: Animal[] = [];
                data.animals.forEach((el: Animal) => {
                    if (el.type === 'chien') {
                        dogs.push(el);
                    } else {
                        cats.push(el);
                    }
                });

                setDogsList(dogs);
                setCatsList(cats);
            } catch {
                setError('Erreur lors du chargement');
            } finally {
                setLoading(false);
            }
        };
        fetchData();
    }, []);

    return (
        <>
            <Suspense fallback={<div>Loading...</div>}>
                <HighLight
                    error={error}
                    loading={loading}
                    introduction={{
                        title: 'Nos chiens mis en avant',
                        content:
                            'Ces chiens sont pleins d’amour et n’attendent qu’une famille aimante pour partager leur bonheur. Chacun d’eux a une histoire et une personnalité unique, mais tous ont un point commun : une immense envie d’offrir leur affection et de recevoir la vôtre. Offrez-leur une seconde chance, ils vous le rendront au centuple !',
                    }}
                    animals={dogsList}
                />
                <HighLight
                    error={error}
                    loading={loading}
                    introduction={{
                        title: 'Nos chats mis en avant',
                        content:
                            'Ces chats attendent avec impatience une famille qui saura leur offrir douceur et sécurité. Chacun d’eux a beaucoup d’amour à donner et ne demande qu’à partager des moments de tendresse. Offrez-leur un foyer, et ils deviendront vos plus fidèles compagnons à quatre pattes !',
                    }}
                    animals={catsList}
                />
            </Suspense>
        </>
    );
}

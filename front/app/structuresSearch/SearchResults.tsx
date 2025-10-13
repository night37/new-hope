'use client';

import React, { useState, useEffect } from 'react';
import { useAnimalStore } from '@/store/animalStore';
import { AnimalCard } from '@/Components/animalCard/AnimalCard';
import { Pagination } from '@/Components/pagination/Pagination';
import { AnimalsList } from '@/types/animalsList.type';

export default function SearchResults() {
    // const searchResults = useAnimalStore((state) => state.searchResults);
    // const [animalsList, setAnimalsList] = useState<AnimalsList>({ animals: { data: [] } });

    // useEffect(() => {
    //     if (searchResults) {
    //         setAnimalsList({ animals: searchResults.animals });
    //     }
    // }, [searchResults]);

    return (
        <>
        test
            {/* {animalsList.animals.data.length > 0 ? (
                <div className="container mx-auto my-10 flex flex-col gap-10">
                    <div className="mx-auto flex items-center gap-3 lg:mx-0">
                        <h2 className="font-handlee text-lg font-bold">
                            Résultats de la recherche{' '}
                        </h2>
                        <p className="text-sm"> {searchResults.animals.count} résultats Trouvés</p>
                    </div>
                    <div className="result-container flex flex-wrap justify-center gap-[40px] lg:justify-start">
                        {animalsList.animals.data.map((animal, key) => (
                            <div className="w-[265px]" key={key}>
                                <AnimalCard
                                    key={key}
                                    image={{
                                        src:
                                            typeof animal.thumbnail === 'string'
                                                ? animal.thumbnail
                                                : '/img/placeholder.png',
                                        alt: animal.name,
                                    }}
                                    animal={{
                                        id: animal.id,
                                        name: animal.name,
                                        breed: animal.breed ? animal.breed : [],
                                        type: animal.type,
                                        structure: { name: animal?.structure?.name },
                                    }}
                                    path={`/animal/${animal.name}`}
                                />
                            </div>
                        ))}
                    </div>
                    {searchResults.animals.totalPages > 1 && (
                        <Pagination
                            totalPages={Number(searchResults.animals.totalPages)}
                            currentPage={Number(searchResults.animals.currentPage)}
                        />
                    )}
                </div>
            ) : (
                <div
                    className={`container mx-auto my-10 text-center font-caveat text-xl ${searchResults ? '' : 'hidden'}`}
                >
                    Aucun résultat trouvé
                </div>
            )} */}
        </>
    );
}

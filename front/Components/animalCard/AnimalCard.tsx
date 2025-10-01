import * as React from 'react';
import Image from 'next/image';
import { Button } from '@/Components/ui/button/Button';
import { useRouter } from 'next/navigation';
import { useAnimalStore } from '@/store/animalStore';
import type { AnimalCard as AnimalCardProps } from '@/types/animalCard.type';

export const AnimalCard = ({ image, animal, path }: AnimalCardProps) => {
    console.log(animal);
    const router = useRouter();
    const updateId = useAnimalStore((state) => state.updateId);

    const onClick = () => {
        console.log(animal.id);
        updateId(animal.id);
        router.push(path);
    };

    return (
        <article className="container flex flex-col bg-white shadow-card">
            <div className="image-container w-fit">
                <Image
                    className="object-cover"
                    src={'/img/placeholder.svg'}
                    alt={image.alt}
                    height={210}
                    width={263}
                />
            </div>
            <div className="details-container flex flex-col items-center px-[23px] py-[16px]">
                <h3 className="title-container font-caveat text-large"> {animal.name}</h3>
                <div className="animal-detail-container">
                    <span className="font-handlee text-base">{animal.breed.join(', ')}</span>
                    <span className="font-handlee text-base">{animal.gender}</span>
                </div>
                <div className="font-handlee font-bold">{animal.structure.name}</div>
                <div className="w-4/4">
                    <Button
                        onClick={onClick}
                        label="faire connaissance"
                        type="button"
                        fontsize={'text-xl'}
                    />
                </div>
            </div>
        </article>
    );
};

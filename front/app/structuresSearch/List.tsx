import React from 'react';
import { StructureListProps } from '@/types/structureListProps.type';
import StructureCard from '@/Components/structureCard/StructureCard';

export default function List({ structures }: StructureListProps) {
    return (
        <ul className="list-container flex max-h-[600px] w-full flex-col gap-3 overflow-y-scroll md:max-w-[500px]">
            {structures && structures?.length > 0 ? (
                structures.map((structure) => (
                    <li key={structure.id} className="flex w-full justify-center">
                        <StructureCard structure={structure} />
                    </li>
                ))
            ) : (
                <p>Aucune structure n &#39;a été trouvée.</p>
            )}
        </ul>
    );
}

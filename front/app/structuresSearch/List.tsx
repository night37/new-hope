import React from 'react';
import { StructureListProps } from '@/types/structureListProps.type';
import StructureCard from '@/Components/structureCard/StructureCard';


export default function List({ structures }: StructureListProps) {
    return (
        <ul className="list-container md-w-1/3 flex max-h-[600px] w-full flex-col gap-3 overflow-y-scroll md:max-w-[250px]">
            {structures && structures?.length > 0 ? (
                structures.map((structure, index) => (
                    <li key={index} className="flex w-full justify-center">
                        <StructureCard structure={structure} />
                    </li>
                ))
            ) : (
                <p>Aucune structure n &#39;a été trouvée.</p>
            )}
        </ul>
    );
}

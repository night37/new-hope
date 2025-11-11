import React from 'react';
import { Structure } from '@/types/structure.type';
import { useStructureStore } from '@/store/structureStore';
import './style.scss';

export default function StructureCard({ structure }: { structure: Structure }) {
    const setSelectedStructureCordinate = useStructureStore(
        (state) => state.setSelectedStructureCoordinate
    );

    return (
        <button
            onClick={() =>
                setSelectedStructureCordinate({
                    latitude: structure.latitude,
                    longitude: structure.longitude,
                })
            }
            className="structure-card flex w-full flex-col items-center rounded-xl border-2 p-4"
        >
            <p className="font-caveat font-bold">{structure.name}</p>
            <p className="font-handlee">{structure.street}</p>
            <p className="font-handlee">{structure.city}</p>
            <a
                href={`mailto:${structure.email}`}
                className="contact-link rounded-3xl border-custom-secondary bg-custom-secondary px-[20px] font-caveat text-lg hover:bg-custom-primary focus:bg-custom-primary active:bg-custom-secondary"
            >
                {' '}
                contacter l&apos;association{' '}
            </a>
        </button>
    );
}

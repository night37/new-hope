import React from 'react';
import dynamic from 'next/dynamic';

import { useStructureStore } from '@/store/structureStore';
import List from './List';

const Map = dynamic(() => import('./Map'), {
    ssr: false,
});

export default function SearchResults() {
    const structures = useStructureStore((state) => state.structuresList);

    return (
        <div className="container mx-auto my-10 flex flex-col gap-6 px-4 md:flex-row md:px-0">
            <div className="hidden md:block md:w-[400px]">
                <List structures={structures} />
            </div>
            <Map structures={structures} />
            <div className="md:hidden">
                <List structures={structures} />
            </div>
        </div>
    );
}

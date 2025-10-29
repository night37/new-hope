'use client';

import React from 'react';
import { useStructureStore } from '@/store/structureStore';
import List from './List';
import Map from './Map';

export default function SearchResults() {
    const structures = useStructureStore((state) => state.structuresList);

    return (
        <div className="container mx-auto my-10 flex px-4 flex-col md:flex-row gap-6">
            <div className='hidden md:block'>
                <List structures={structures} />
            </div>
            <Map structures={structures}/>
            <div className='md:hidden'>
                <List structures={structures} />
            </div>
        </div>
    );
}

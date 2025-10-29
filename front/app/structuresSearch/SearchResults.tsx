import React from 'react';
import dynamic from "next/dynamic"

import { useStructureStore } from '@/store/structureStore';
import List from './List';

const Map = dynamic(() => import("./Map"), {
    ssr: false,
})

export default function SearchResults() {
    const structures = useStructureStore((state) => state.structuresList);


    return (
        <div className="container mx-auto my-10 flex px-4 md:px-0 flex-col md:flex-row gap-6">
            <div className='hidden md:block md:w-[400px]'>
                <List structures={structures} />
            </div>
            <Map structures={structures}/>
            <div className='md:hidden'>
                <List structures={structures} />
            </div>
        </div>
    );
}

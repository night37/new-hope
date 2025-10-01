import React from 'react';
import SearchResults from './SearchResults';
import { Hero } from '@/Components/layout/hero/Hero';

export default function page() {
    return (
        <div>
            <Hero filterOption={"animal"} />
            <SearchResults />
        </div>
    );
}

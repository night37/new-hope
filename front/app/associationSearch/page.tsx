import React from 'react';
// import SearchResults from './SearchResults';
import { Hero } from '@/Components/layout/hero/Hero';
import { FilterOption } from '../../types/filter.type';

export default function page() {
    return (
        <div>
            <Hero filterOption={"association"} />
            {/* <SearchResults /> */}
        </div>
    );
}

import React, { useState, useEffect } from 'react';
import { useAnimalStore } from '@/store/animalStore';
import { filtersResults } from '@/api/filters/animals';
import { smoothScroll } from '@/utils';
import { Pagination as PaginationProps } from '@/types/pagination.type';

export function Pagination({ totalPages, currentPage }: PaginationProps) {
    const [pageArray, setPageArray] = useState<number[]>([]);
    const searchParameters = useAnimalStore((state) => state.searchParameters);
    const setSearchResults = useAnimalStore((state) => state.setSearchResults);

    useEffect(() => {
        const indexArray = [];

        for (let i = 1; i <= totalPages; i++) {
            indexArray.push(i);
        }
        // const result = async () => await filtersResults(searchParameters, 1)
        // setSearchResults(result);
        setPageArray(indexArray);
    }, [totalPages]);

    const fetchApi = async (page: number) => {
        const result = await filtersResults(searchParameters, page);
        setSearchResults(result);

        smoothScroll(500, 80);
    };

    return (
        <div className="mx-auto gap-2 join">
            <button
                className="btn !rounded-full bg-custom-primary hover:bg-custom-secondary focus:bg-custom-secondary"
                onClick={() => {
                    fetchApi(currentPage > 1 ? currentPage - 1 : 1);
                }}
            >
                Page précédente
            </button>
            {pageArray.map((page, key) => {
                return (
                    <input
                        className={`btn h-[40] w-[40] !rounded-full !text-black join-item ${page === currentPage ? 'bg-custom-secondary' : 'bg-custom-primary hover:bg-custom-secondary'} btn-sm btn-circle`}
                        type="radio"
                        key={key}
                        name="options"
                        aria-label={page.toString()}
                        onClick={() => {
                            fetchApi(page);
                        }}
                        defaultChecked={page === 1}
                    />
                );
            })}
            <button
                className="btn !rounded-full bg-custom-primary hover:bg-custom-secondary focus:bg-custom-secondary"
                onClick={() => {
                    fetchApi(currentPage < totalPages ? currentPage + 1 : totalPages);
                }}
            >
                Page suivante
            </button>
        </div>
    );
}

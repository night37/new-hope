import { create } from 'zustand';
import { persist } from 'zustand/middleware';

export const useAnimalStore = create(
    persist(
        (set) => ({
            id: null,
            searchParameters: null,
            searchResults: null,
            updateId(id) {
                set({ id: id });
            },

            updateSearchParameters(parameters) {
                set({
                    searchParameters: parameters,
                });
            },

            setSearchResults(result) {
                set({
                    searchResults: result,
                });
            },
        }),
        { name: 'animal-store' }
    )
);

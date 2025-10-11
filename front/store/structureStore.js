import { create } from 'zustand';
import { persist } from 'zustand/middleware';

export const useStructureStore = create(
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
        { name: 'structure-store' }
    )
);

import { create } from 'zustand';
import { persist } from 'zustand/middleware';

export const useStructureStore = create(
    persist(
        (set) => ({
            id: null,
            searchParameters: null,
            structuresList: null,
            updateId(id) {
                set({ id: id });
            },

            updateSearchParameters(parameters) {
                set({
                    searchParameters: parameters,
                });
            },

            setStructuresList(result) {
                set({
                    structuresList: result,
                });
            },
        }),
        { name: 'structure-store' }
    )
);

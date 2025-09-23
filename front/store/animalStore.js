import { create } from "zustand";



export const useAnimalStore = create((set) => ({
    id : null,
    searchParameters : null,
    searchResults: null,
    updateId(id) {
        set({id: id})
    },

    updateSearchParameters(parameters) {
        set({
            searchParameters: parameters
        })
        
    },

    setSearchResults(result) {
       set({
            searchResults: result
        })
    }



}))





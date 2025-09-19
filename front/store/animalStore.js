import { create } from "zustand";



export const useAnimalStore = create((set) => ({
    id : null,

    updateId(id) {
        set({id: id})
    }

}))
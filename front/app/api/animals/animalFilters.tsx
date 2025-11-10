import { apiQuery } from '../query';


export async function animalFilters() {
    try {
        const response = await apiQuery(`/animal/filters`);

        if (!response) {
            throw new Error(`Erreur lors du chargement des filtres`);
        }

        return response;
        
    } catch (err) {
        console.error('Erreur lors du chargement des filtres:', err);
        throw err;
    }
}

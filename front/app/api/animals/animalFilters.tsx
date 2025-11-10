import { apiQuery } from '../query';


export async function animalFilters() {
    try {
        const response = await apiQuery(`/animal/filters`);

        if (!response.ok) {
            throw new Error(`HTTP ${response.status}: ${response.statusText}`);
        }

        const data = await response.json();
        return data;
    } catch (err) {
        console.error('Erreur lors du chargement des filtres:', err);
        throw err;
    }
}

import { apiQuery } from '../query';


export async function getStructures() {
    try {
        const result = await apiQuery('/structure/getAllStructures').then((response) => {
            if (!response) {
                throw new Error(`Erreur lors du chargement des structures`);
            }
            return response;
        });

        return result;
    } catch (err) {
        console.error('Erreur lors du chargement des structures:', err);
    }
}

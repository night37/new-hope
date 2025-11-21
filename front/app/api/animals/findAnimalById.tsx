import { apiQuery } from '../query';

export async function findById(id: number) {
    if (typeof id === 'number' && id) {
        try {
            const response = await apiQuery(`/animal/findById?id=${id}`);
            if (!response) {
                throw new Error(`Erreur lors de la recherche par ID`);
            }
            return response;
        } catch (err) {
            console.error('Erreur lors de la recherche par ID:', err);
            throw err;
        }
    }
    console.error("l'id est obligatoire et doit être de type number");
}

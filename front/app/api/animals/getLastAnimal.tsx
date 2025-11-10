import { apiQuery } from '../query';


export async function getLastAnimalsList() {
    try {
        const response = await apiQuery(
            'animal/getRandomLastAnimals',
        );
        if (!response) {
            throw new Error(`une erreur est survenue lors du chargement des animaux`);
        }
        return response;
    } catch (err) {
        console.error('Erreur lors du chargement des animaux:', err);
        throw err;
    }
}

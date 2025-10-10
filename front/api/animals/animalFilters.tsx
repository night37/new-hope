export async function animalFilters() {
    try {
        const response = await fetch(`${process.env.NEXT_PUBLIC_API_URL}/animal/filters`);

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
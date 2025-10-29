export async function getStructures() {
    try {
        const result = await fetch(
            process.env.NEXT_PUBLIC_API_URL + '/structure/getAllStructures'
        ).then((response) => {
            if (!response.ok) {
                throw new Error(`HTTP ${response.status}: ${response.statusText}`);
            }
            return response.json();
        });

        return result;
    } catch (err) {
        console.error('Erreur lors du chargement des structures:', err);
    }
}

export async function findById(id: number) {
    if (typeof id === 'number' && id) {
        try {
            const response = await fetch(
                `${process.env.NEXT_PUBLIC_API_URL}/animal/findById?id=${id}`
            );
            if (!response.ok) {
                throw new Error(`HTTP ${response.status}: ${response.statusText}`);
            }
            const data = await response.json();

            return data;
        } catch (err) {
            console.error('Erreur lors de la recherche par ID:', err);
            throw err;
        }
    }
    console.error("l'id est obligatoire et doit être de type number");
    return;
}

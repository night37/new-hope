export async function apiQuery(query: string) {
    
    
    const url = `${process.env.NEXT_PUBLIC_API_URL}/${query}`;
    console.log(url);
    return await fetch(url,
        {
            method: 'GET',
            headers: {
                'Accept': 'application/ld+json',
                'Authorization': `Bearer ${process.env.NEXT_PUBLIC_SYMFONY_JWT_TOKEN}`

            }
        });
}

export async function locationQuery(option: string, name?: string, departement?: string, region?: string) {
    if (!option) {
        throw new Error(
            "le parametre option est obligatoir est avoir obligatoirement une de ces valeurs 'communes / departements / regions'"
        );
    }

    try {
        let query = `/structures/autocomplete?option=${option}`;

        if (name) {
            query += `&name=${name}`;
        }
        if (departement) {
            query += `&departement=${departement}`;
        }
        if (region) {
            query += `&region=${region}`;
        }
        const response = await apiQuery(query);
        return await response.json();
    } catch (err) {
        console.error('Erreur lors de la recuperation de la réponse', err);
        throw err;
    }
}

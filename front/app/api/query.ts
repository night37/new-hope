'use server';

async function getJwtToken() {
   
    const response = await fetch(`${process.env.NEXT_PUBLIC_JWT_URL}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            email: process.env.SYMFONY_JWT_EMAIL,
            password: process.env.SYMFONY_JWT_PASSWORD,
        }),
    });

    if (!response.ok) {
        throw new Error(`HTTP ${response.status}: ${response.statusText}`);
    }
    const data = await response.json();
    return data.token;
}

export async function apiQuery(query: string) {
    const token = await getJwtToken();

    const url = `${process.env.NEXT_PUBLIC_API_URL}${query}`;

    const response = await fetch(url, {
        method: 'GET',
        headers: {
            Accept: 'application/ld+json',
            Authorization: `Bearer ${token}`,
        },
    });
    return await response.json();
}

export async function locationQuery(
    option: string,
    name?: string,
    departement?: string,
    region?: string
) {
    if (!option) {
        throw new Error(
            "le parametre option est obligatoire est avoir obligatoirement une de ces valeurs 'communes / departements / regions'"
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
        return await response;
    } catch (err) {
        console.error('Erreur lors de la recuperation de la réponse', err);
        throw err;
    }
}

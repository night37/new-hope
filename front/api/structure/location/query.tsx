export async function query (option: string, name?: string) {
    if(!option) {
        throw new Error("le parametre option est obligatoir est avoir obligatoirement une de ces valeurs 'communes / departements / regions'")
    }

    try {
        let query = `${process.env.NEXT_PUBLIC_API_URL}/structures/autocomplete?option=${option}`
        if (name) {
            query+= `&name=${name}`
        }
        const response = await fetch(query)
        return await response.json();
    } catch (err) {
        console.error('Erreur lors de la recuperation de la réponse', err);
            throw err;
    }

}
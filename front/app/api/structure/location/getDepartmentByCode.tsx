export async function getDepartementByCode(code: string) {
    const response = await fetch(`https://geo.api.gouv.fr/departements?code=${code}`);
    if (!response) {
        throw new Error('Network response was not ok');
    }
    return response;
}

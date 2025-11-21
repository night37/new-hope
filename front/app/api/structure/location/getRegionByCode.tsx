export async function getRegionByCode(code: string) {
    const response = await fetch(`https://geo.api.gouv.fr/regions?code=${code}`);
    if (!response) {
        throw new Error('Network response was not ok');
    }
    return response.json();
}

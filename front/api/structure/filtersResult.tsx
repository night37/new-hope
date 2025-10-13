export async function getFiltersResult(filters: {
    'autocomplete-communes': { code: string; name: string };
    'autocomplete-departements': { code: string; name: string };
    'autocomplete-regions': { code: string; name: string };
    distance: string;
}) {
    console.log(filters);
    let query = 'https://geo.api.gouv.fr/communes?';
}
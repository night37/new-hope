import { query } from '@/api/structure/location/query';

export async function getDepartements(name: string) {
    return await query('departements', name);
}

import { query } from '@/api/structure/location/query';

export async function getRegions(name: string) {
    return await query('regions', name);
}

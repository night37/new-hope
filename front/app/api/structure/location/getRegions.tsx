import { query } from '@/app/api/structure/location/query';

export async function getRegions(name: string) {
    return await query('regions', name);
}

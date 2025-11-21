import { Filters } from '@/types/queryFilters';
import { apiQuery } from '../query';

export async function filtersResults(filters: Filters, currentPage: number = 1) {
    const filterList: Filters = [];
    let response;
    if (filters.length > 0) {
        let qb: string = '';

        filters.forEach((filter) => {
            const findFilterIndex = filterList.findIndex(
                (el) => el?.fieldName === filter.fieldName
            );
            const fieldNameToLower = filter.fieldName.toLowerCase();

            if (fieldNameToLower !== 'breed' && fieldNameToLower !== 'affinity') {
                if (findFilterIndex == -1) {
                    filterList.push(filter);
                } else {
                    if (!filterList[findFilterIndex].value.includes(filter.value)) {
                        filterList[findFilterIndex].value += `,${filter.value}`;
                    }
                }
            } else {
                qb += `${fieldNameToLower}[]=${filter.value.toLowerCase()}&`;
            }
        });

        filterList.forEach((el, key) => {
            qb += `${el.fieldName.toLowerCase()}=${el.value}${filterList.length - 1 === key ? '&' : ''}`;
        });
        if (qb[qb.length - 1] === '&') {
            qb = qb.slice(0, -1);
        }
        try {
            response = await apiQuery(`/animal/filtersResults?${qb}&page=${currentPage}`);

            if (!response) {
                throw new Error(`Erreur lors du chargement des resultats`);
            }
        } catch (err) {
            console.error('Erreur lors du chargement des resultats:', err);
            throw err;
        }
    } else {
        response = await apiQuery(`/animal/filtersResults?page=${currentPage}`);
    }
    return response;
}

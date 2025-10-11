import { Filters } from '@/types/queryFilters';

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
            response = await fetch(
                `${process.env.NEXT_PUBLIC_API_URL}/animal/filtersResults?${qb}&page=${currentPage}`
            );

            if (!response.ok) {
                throw new Error(`HTTP ${response.status}: ${response.statusText}`);
            }
        } catch (err) {
            console.error('Erreur lors du chargement des resultats:', err);
            throw err;
        }
    } else {
        response = await fetch(
            `${process.env.NEXT_PUBLIC_API_URL}/animal/filtersResults?page=${currentPage}`
        );
    }
    const data = await response.json();
    return data;
}

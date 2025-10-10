import React from 'react';
import AsyncSelect from 'react-select/async';
import { query } from "@/api/structure/location/query";
import { Autocomplete as autocompleteProps } from "@/types/Autocomplete.type"
import { AutocompleteCitiesResponse } from "@/types/autocompleteCitiesResponse.type"
import { AutocompleteDepartmentsResponse } from "@/types/autocompleteDepartmentsResponse.type"
import { AutocompleteRegionsResponse } from "@/types/autocompleteRegionsResponse.type"
import { AutocompleteNotFoundResponse } from '@/types/autocompleteNotFoundResponse.type'
import { OptionType } from '@/types/autocompleteOption.type';
import './style.scss';

export function Autocomplete({ option }: autocompleteProps) {
    const loadOptions = (inputValue: string): Promise<OptionType[]> => {
        return new Promise<OptionType[]>((resolve) => {
            setTimeout(async () => {
                const response: AutocompleteCitiesResponse[] | AutocompleteDepartmentsResponse[] | AutocompleteRegionsResponse[] | AutocompleteNotFoundResponse = await query(option, inputValue);
                if (Array.isArray(response) && response.length > 0) {
                    const data: OptionType[] = response.map((el: AutocompleteCitiesResponse | AutocompleteDepartmentsResponse | AutocompleteRegionsResponse) => {
                        return { value: el.name, label: el.name };
                    });
                    resolve(data);
                } else {
                    resolve([]);
                }
            }, 1000);
        });
    };

    return (
        <div className="w-full autocomplete_container">
            <label className="text-large font-caveat">{`${option}`}</label>
            <AsyncSelect
                placeholder={`Entrer une valeur`}
                noOptionsMessage={() => "Aucun résultat"}
                className="z-1 font-caveat flex w-full cursor-pointer justify-between rounded-box rounded-xl border-solid border-custom-primary bg-white text-large shadow-sm"
                cacheOptions
                loadOptions={loadOptions}
                defaultOptions
            />
        </div>
    );
}

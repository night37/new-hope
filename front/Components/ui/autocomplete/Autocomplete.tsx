import React from 'react';
import AsyncSelect from 'react-select/async';
import { query } from '@/api/structure/location/query';
import { Autocomplete as autocompleteProps } from '@/types/Autocomplete.type';
import { AutocompleteCitiesResponse } from '@/types/autocompleteCitiesResponse.type';
import { AutocompleteDepartmentsResponse } from '@/types/autocompleteDepartmentsResponse.type';
import { AutocompleteRegionsResponse } from '@/types/autocompleteRegionsResponse.type';
import { AutocompleteNotFoundResponse } from '@/types/autocompleteNotFoundResponse.type';
import { OptionType } from '@/types/autocompleteOption.type';
import './style.scss';

export function Autocomplete({ option, onChange }: autocompleteProps) {
    const loadOptions = (inputValue: string): Promise<OptionType[]> => {
        return new Promise<OptionType[]>((resolve) => {
            setTimeout(async () => {
                const response:
                    | AutocompleteCitiesResponse[]
                    | AutocompleteDepartmentsResponse[]
                    | AutocompleteRegionsResponse[]
                    | AutocompleteNotFoundResponse = await query(option, inputValue);
                if (Array.isArray(response) && response.length > 0) {
                    const data: OptionType[] = response.map(
                        (
                            el:
                                | AutocompleteCitiesResponse
                                | AutocompleteDepartmentsResponse
                                | AutocompleteRegionsResponse
                        ) => {
                            return { value: el.name, label: el.name };
                        }
                    );
                    resolve(data);
                } else {
                    resolve([]);
                }
            }, 1000);
        });
    };

    return (
        <div className="autocomplete_container w-full">
            <label className="font-caveat text-large">{`${option}`}</label>
            <AsyncSelect
                name={`autocomplete-${option}`}
                placeholder={`ex: ${option === 'communes' ? 'Paris' : option === 'departements' ? 'Seine-et-Marne' : 'Île-de-France'}`}
                noOptionsMessage={() => 'Aucun résultat'}
                className="z-1 select flex w-96 max-w-full cursor-pointer justify-between !rounded-xl border-solid border-custom-primary bg-white bg-[url('/assets/icons/patte.svg')] bg-[length:16px] bg-[position:98%_50%] bg-no-repeat p-2 font-caveat text-large shadow-sm"
                cacheOptions
                loadOptions={loadOptions}
                defaultOptions
                onChange={
                    onChange
                        ? (selectedOption) => onChange((selectedOption as OptionType).value)
                        : undefined
                }
                aria-label={`rechercher une ${option}`}
            />
        </div>
    );
}

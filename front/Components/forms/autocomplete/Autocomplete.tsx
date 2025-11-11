import React, { useCallback, useMemo, useId } from 'react';
import AsyncSelect from 'react-select/async';
import { locationQuery } from '@/app/api/query';
import {
    StructureAutocomplete as autocompleteProps,
    LocationValue,
} from '@/types/structureAutocomplete.type';
import { AutocompleteApiResponse } from '@/types/autocompleteApiResponse.type';
import { AutocompleteNotFoundResponse } from '@/types/autocompleteNotFoundResponse.type';
import { OptionType } from '@/types/autocompleteOption.type';
import './style.scss';

export function Autocomplete({ option, onChange, formData }: autocompleteProps) {
    const id: string = useId();
    const loadOptions = useCallback(
        (inputValue: string): Promise<OptionType[]> => {
            return new Promise<OptionType[]>((resolve) => {
                let regionCode = undefined;
                let departementCode = undefined;
                if (formData) {
                    regionCode = formData['autocomplete-regions']?.code;
                    departementCode = formData['autocomplete-departements']?.code;
                }
                setTimeout(async () => {
                    const response: AutocompleteApiResponse[] | AutocompleteNotFoundResponse =
                        await locationQuery(option, inputValue, departementCode, regionCode);
                    if (Array.isArray(response) && response.length > 0) {
                        const data: OptionType[] = response.map((el: AutocompleteApiResponse) => {
                            return {
                                value: {
                                    code: el.code,
                                    name: el.name,
                                    codeDepartement: el.codeDepartement,
                                    codeRegion: el.codeRegion,
                                    centre: el.centre,
                                },
                                label: el.name,
                            };
                        });
                        resolve(data);
                    } else {
                        resolve([]);
                    }
                }, 1000);
            });
        },
        [option, formData]
    );

    const selectKey = useMemo(() => {
        const regionCode = formData?.['autocomplete-regions']?.code || '';
        const departementCode = formData?.['autocomplete-departements']?.code || '';

        if (option === 'regions') {
            return `regions`;
        }
        if (option === 'departements') {
            return `departements-${regionCode}`;
        }
        return `communes-${regionCode}-${departementCode}`;
    }, [option, formData]);

    const currentValue = useMemo(() => {
        const selected = formData?.[`autocomplete-${option}` as keyof typeof formData];

        if (!selected || !selected.code || !selected.name) return null;
        return {
            value: selected,
            label: typeof selected === 'object' && selected !== null ? selected.name : '',
        };
    }, [formData, option]);

    return (
        <div className="autocomplete_container w-full">
            <label className="font-caveat text-large">{`${option}`}</label>
            <AsyncSelect
                id={id}
                key={selectKey}
                value={
                    currentValue ? { value: currentValue.value, label: currentValue.label } : null
                }
                name={`autocomplete-${option}`}
                placeholder={`ex: ${option === 'communes' ? 'Paris' : option === 'departements' ? 'Seine-et-Marne' : 'Île-de-France'}`}
                noOptionsMessage={() => 'Aucun résultat'}
                className="z-1 select flex w-60 max-w-full cursor-pointer justify-between !rounded-xl border-solid border-custom-primary bg-white bg-[url('/assets/icons/patte.svg')] bg-[length:16px] bg-[position:98%_50%] bg-no-repeat p-2 font-caveat text-large shadow-sm xl:w-96"
                cacheOptions={false}
                loadOptions={loadOptions}
                defaultOptions
                onChange={(selectedOption) => {
                    const value = (selectedOption as OptionType)?.value ?? null;
                    onChange?.(value as LocationValue | null);
                }}
                aria-label={`rechercher une ${option}`}
            />
        </div>
    );
}

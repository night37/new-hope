import React, { useState } from 'react';
import { Autocomplete } from './autocomplete/Autocomplete';
import { Button } from '../ui/button/Button';
import { useStructureStore } from '@/store/structureStore';
import { getStructures } from '@/app/api/structure/getStructures';
import { smoothScroll } from '@/utils';
import { useRouter, usePathname } from 'next/navigation';
import { getRegionByCode } from '@/app/api/structure/location/getRegionByCode';
import { getDepartementByCode } from '@/app/api/structure/location/getDepartmentByCode';
import { LocationValue } from '@/types/structureAutocomplete.type';

export default function AssociationForm() {
    const [formData, setFormData] = useState({
        'autocomplete-communes': { code: '', name: '' },
        'autocomplete-departements': { code: '', name: '' },
        'autocomplete-regions': { code: '', name: '' },
        distance: '',
    });
    const setSearchParameters = useStructureStore((state) => state.updateSearchParameters);
    const setStructuresList = useStructureStore((state) => state.setStructuresList);
    const router = useRouter();
    const currentPath = usePathname();

    const submitForm = async (e: React.FormEvent<HTMLFormElement>) => {
        e.preventDefault();
        setSearchParameters(formData);
        const structuresList = await getStructures();
        setStructuresList(structuresList.structure);
        smoothScroll(600, 80);
        if (currentPath != '/structuresSearch') {
            router.push('/structuresSearch');
        }
    };

    const resetFilters = () => {
        setFormData({
            'autocomplete-communes': { code: '', name: '' },
            'autocomplete-departements': { code: '', name: '' },
            'autocomplete-regions': { code: '', name: '' },
            distance: '',
        });
        setSearchParameters({
            'autocomplete-communes': { code: '', name: '' },
            'autocomplete-departements': { code: '', name: '' },
            'autocomplete-regions': { code: '', name: '' },
            distance: '',
        });
        setStructuresList([]);
    };

    const handleRegionChange = (value: LocationValue | null) => {
        if (value) {
            setFormData({
                'autocomplete-communes': { code: '', name: '' },
                'autocomplete-departements': { code: '', name: '' },
                'autocomplete-regions': value,
                distance: '',
            });
        } else {
            setFormData({
                'autocomplete-communes': { code: '', name: '' },
                'autocomplete-departements': { code: '', name: '' },
                'autocomplete-regions': { code: '', name: '' },
                distance: '',
            });
        }
    };

    const handleDepartementChange = async (value: LocationValue | null) => {
        if (value && value.codeRegion) {
            const result = await getRegionByCode(value.codeRegion);
            setFormData((prev) => ({
                ...prev,
                'autocomplete-departements': {
                    code: value.code,
                    name: value.name,
                    centre: value.centre,
                },
                'autocomplete-communes': { code: '', name: '' },
                'autocomplete-regions': {
                    code: value.codeRegion ?? '',
                    name: result[0]?.nom ?? '',
                },
            }));
        } else {
            setFormData((prev) => ({
                ...prev,
                'autocomplete-departements': { code: '', name: '' },
                'autocomplete-communes': { code: '', name: '' },
                'autocomplete-regions': { code: '', name: '' },
            }));
        }
    };

    const handleCommuneChange = async (value: LocationValue | null) => {
        if (value && value.codeRegion && value.codeDepartement) {
            const regionResult = await getDepartementByCode(value.codeDepartement);

            const departementResult = await getRegionByCode(value.codeRegion);
            setFormData((prev) => ({
                ...prev,
                'autocomplete-communes': value
                    ? value
                    : { code: '', name: '', centre: { latitude: 0, longitude: 0 } },
                'autocomplete-departements': {
                    code: value.codeDepartement ?? '',
                    name: regionResult[0].nom ?? '',
                },
                'autocomplete-regions': {
                    code: value.codeRegion ?? '',
                    name: departementResult[0].nom ?? '',
                },
            }));
        }
    };

    return (
        <form
            className="relative flex min-h-[300px] w-full flex-wrap justify-center gap-10 lg:justify-start"
            onSubmit={(e) => {
                submitForm(e);
            }}
        >
            <div className="flex w-full flex-wrap justify-center">
                <div className="px-3 lg:w-1/4">
                    <Autocomplete
                        option={'regions'}
                        formData={formData}
                        onChange={(value) => handleRegionChange(value)}
                    />
                </div>
                <div className="px-3 lg:w-1/4">
                    <Autocomplete
                        option={'departements'}
                        formData={formData}
                        onChange={(value) => handleDepartementChange(value)}
                    />
                </div>
                <div className="px-3 lg:w-1/4">
                    <Autocomplete
                        option={'communes'}
                        formData={formData}
                        onChange={(value) => handleCommuneChange(value)}
                    />
                </div>
            </div>
            <div className="mx-auto flex flex-col justify-center gap-4 lg:w-2/4">
                <Button label={'Trouver une association'} type={'submit'} onClick={() => {}} />
                <button
                    className="rounded-3xl border-custom-primary px-[5px] font-caveat"
                    onClick={() => {
                        resetFilters();
                    }}
                >
                    Réinitialiser les filtres
                </button>
            </div>
        </form>
    );
}

import React, { useState } from 'react';
import { Autocomplete } from '@/Components/ui/autocomplete/Autocomplete';
import { Button } from '../ui/button/Button';
import { useStructureStore } from '@/store/structureStore';

export default function AssociationForm() {

    const [formData, setFormData] = useState({
        'autocomplete-communes': '',
        'autocomplete-departements': '',
        'autocomplete-regions': '',
        distance: '',
    });
    const setSearchParameters = useStructureStore((state) => state.updateSearchParameters);
    const setSearchResults = useStructureStore((state) => state.setSearchResults);
    const searchParameters = useStructureStore((state) => state.searchParameters);



    const submitForm = async (e: React.FormEvent<HTMLFormElement>) => {
        e.preventDefault();
        setSearchParameters(formData);

        console.log(formData);
    };

    return (
        <form
            className="relative flex min-h-[300px] w-full flex-wrap justify-center gap-10 lg:justify-start"
            onSubmit={(e) => {
                submitForm(e);
            }}
        >
            <div className="flex w-full flex-wrap justify-center lg:justify-start">
                <div className="px-3 lg:w-1/4">
                    <Autocomplete
                        option={'communes'}
                        onChange={(value) =>
                            setFormData((prev) => ({ ...prev, ['autocomplete-communes']: value }))
                        }
                    />
                </div>
                <div className="px-3 lg:w-1/4">
                    <Autocomplete
                        option={'departements'}
                        onChange={(value) =>
                            setFormData((prev) => ({
                                ...prev,
                                ['autocomplete-departements']: value,
                            }))
                        }
                    />
                </div>
                <div className="px-3 lg:w-1/4">
                    <Autocomplete
                        option={'regions'}
                        onChange={(value) =>
                            setFormData((prev) => ({ ...prev, ['autocomplete-regions']: value }))
                        }
                    />
                </div>
                <div className="px-3 lg:w-1/4">
                    <div className="flex flex-col">
                        <label htmlFor="distance-input" className="font-caveat text-large">
                            Distance maximum (en km)
                        </label>
                        <input
                            id="distance-input"
                            type="number"
                            min="0"
                            placeholder="ex: 10"
                            value={formData.distance}
                            onChange={(e) =>
                                setFormData((prev) => ({ ...prev, distance: e.target.value }))
                            }
                            className="z-1 input flex w-96 max-w-full cursor-pointer justify-between !rounded-xl border-solid border-custom-primary bg-white p-2 font-caveat text-large shadow-sm"
                        />
                    </div>
                </div>
            </div>
            <div className="mx-auto flex flex-col justify-center gap-4 lg:w-2/4">
                <Button label={'Trouver une association'} type={'submit'} onClick={() => {}} />
                {/* <button
                            className="rounded-3xl border-custom-primary px-[5px] font-caveat"
                            onClick={() => {
                                resetFilters();
                            }}
                        >
                            Réinitialiser les filtres
                        </button> */}
            </div>
        </form>
    );
}

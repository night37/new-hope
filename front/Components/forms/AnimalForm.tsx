import React, { useEffect, useMemo, useState } from 'react';
import Select from '@/Components/ui/select/Select';
import { animalFilters } from '@/app/api/animals/animalFilters';
import { filtersResults } from '@/app/api/animals/filtersResult';
import { Button } from '@/Components/ui/button/Button';
import { useAnimalStore } from '@/store/animalStore';
import { useRouter, usePathname } from 'next/navigation';
import { smoothScroll } from '@/utils';
import { Filter, FilterOption } from '@/types/filter.type';

export default function AnimalForm() {
    const [filters, setFilters] = useState<Filter[]>([]);
    const [loading, setLoading] = useState<boolean>(true);
    const [error, setError] = useState<boolean>(false);
    const setSearchParameters = useAnimalStore((state) => state.updateSearchParameters);
    const setSearchResults = useAnimalStore((state) => state.setSearchResults);
    const searchParameters = useAnimalStore((state) => state.searchParameters);
    const router = useRouter();
    const currentPath = usePathname();

    useEffect(() => {
        const fetchData = async () => {
            setLoading(true);
            setError(false);
            try {
                const filtersList = await animalFilters();
                const arrayFilters: Filter[] = [];
                if (filtersList) {
                    for (const i in filtersList) {
                        const addIselectedToArray = filtersList[i].data.map((el: Filter) => {
                            return {
                                fieldName: filtersList[i].field_name,
                                isSelected: false,
                                name: el.name,
                                value: el.value,
                            };
                        });
                        arrayFilters.push({ [i]: addIselectedToArray });
                    }
                }
                if (currentPath === '/animalsSearch' && searchParameters?.length > 0) {
                    const newArray: Filter[] = [];
                    arrayFilters.forEach((itemList) => {
                        searchParameters.forEach((param: FilterOption) => {
                            Object.keys(itemList).forEach((key) => {
                                itemList[key] = itemList[key].map((item) => {
                                    if (item.name === param.name) {
                                        item.isSelected = true;
                                    }
                                    return item;
                                });
                            });
                        });
                        newArray.push(itemList);
                    });
                    setFilters([...newArray]);
                } else {
                    setFilters([...arrayFilters]);
                }
            } catch (error) {
                console.error('Error loading filters:', error);
                setError(true);
            } finally {
                setLoading(false);
            }
        };
        fetchData();
    }, [currentPath, searchParameters]);

    const onChange = (event: React.ChangeEvent<HTMLSelectElement>): void => {
        setFilters((el) =>
            el.map((itemList) =>
                Object.keys(itemList).reduce(
                    (acc: { [key: string]: FilterOption[] }, item) => {
                        const findIndex = itemList[item].findIndex(
                            (element) => element.value === event.target.value
                        );
                        if (findIndex !== -1) {
                            acc[item] = itemList[item].map((option, index) =>
                                index === findIndex
                                    ? { ...option, isSelected: !option.isSelected }
                                    : option
                            );
                        } else {
                            acc[item] = itemList[item];
                        }
                        return acc;
                    },
                    {} as { [key: string]: FilterOption[] }
                )
            )
        );
    };

    const submitForm = async (e: React.FormEvent<HTMLFormElement>) => {
        e.preventDefault();
        const filterlist: Array<FilterOption> = [];
        filters.forEach((filter) => {
            Object.keys(filter).forEach((el) => {
                filter[el].map((value) => {
                    if (value.isSelected) {
                        filterlist.push({ ...value });
                    }
                });
            });
        });
        setSearchParameters(filterlist);
        const result = await filtersResults(filterlist, 1);
        setSearchResults(result.animals);
        smoothScroll(600, 80);
        if (currentPath != '/animalsSearch') {
            router.push('/animalsSearch');
        }
    };

    const renderSelect = useMemo(() => {
        return filters.map((filter, key) => (
            <div key={key}>
                <Select
                    label={Object.keys(filter)[0]}
                    options={filter[Object.keys(filter)[0]]}
                    onChange={onChange}
                />
            </div>
        ));
    }, [filters]);

    const resetFilters = () => {
        const resetFilterArray = filters.map((itemList) => {
            const resetItemList: { [key: string]: FilterOption[] } = {};

            Object.entries(itemList).forEach(([key, options]) => {
                resetItemList[key] = (options as FilterOption[]).map((option) => ({
                    ...option,
                    isSelected: false,
                }));
            });

            return resetItemList;
        });
        setFilters(resetFilterArray);
    };
    return (
        <form
            className="relative flex min-h-[360px] w-full flex-wrap justify-center gap-10 lg:justify-start"
            onSubmit={(e) => {
                submitForm(e);
            }}
        >
            {filters.length > 0 && (
                <div className="flex w-full flex-wrap justify-center gap-8 lg:justify-start">
                    {renderSelect}
                </div>
            )}
            {loading ? (
                <div className="min-h-[85px] w-full">
                    <div className="absolute top-10 flex w-full items-end justify-center">
                        <span className="loading loading-spinner text-custom-secondary"></span>
                    </div>
                </div>
            ) : (
                error && (
                    <span className="flex w-full items-center justify-center font-caveat text-xl">
                        <p className="border border-black p-4">Une erreur serveur est survenue </p>
                    </span>
                )
            )}
            <div className="mx-auto flex flex-col justify-center gap-4 lg:w-2/4">
                <Button
                    label={'Trouver votre nouveau compagnon'}
                    type={'submit'}
                    onClick={() => {}}
                />
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

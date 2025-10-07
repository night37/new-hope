'use client';

import { useState } from 'react';
import { ButtonRadio } from '@/Components/ui/buttonRadio/ButtonRadio';
import AnimalForm from '@/Components/forms/AnimalForm';
import AssociationForm from '@/Components/forms/AssociationForm';

export function Hero({ filterOption }: { filterOption?: string }) {
    const [radioBtns, setRadioBtns] = useState([
        {
            name: 'radio1',
            label: 'Rechercher un animal',
            isActive: filterOption === 'association' ? false : true,
        },
        {
            name: 'radio2',
            label: 'Rechercher une association',
            isActive: filterOption === 'association' ? true : false,
        },
    ]);

    const handleRadioClick = (selectedIndex: number) => {
        setRadioBtns((prev) =>
            prev.map((radio, key) => ({
                ...radio,
                isActive: key === selectedIndex,
            }))
        );
    };

    return (
        <div className="bg-fit flex min-h-[450px] w-full justify-center bg-[url(/img/Hero.png)] bg-left bg-no-repeat px-3 py-[40px] lg:bg-cover lg:px-0 lg:py-[98px]">
            <div className="container flex min-h-[550px] flex-col justify-center gap-10 rounded-xl bg-white/50 px-[50px] py-10 lg:py-0">
                <div className="radio-container flex flex-col flex-wrap justify-center gap-5 lg:flex-row lg:items-center">
                    {radioBtns.map((radio, key) => {
                        return (
                            <div
                                key={key}
                                className="flex w-fit"
                                onClick={() => handleRadioClick(key)}
                            >
                                <ButtonRadio label={radio.label} isActive={radio.isActive} />
                            </div>
                        );
                    })}
                </div>
                <div className="form-container container flex min-h-[360px] grid-cols-12 flex-wrap items-center gap-10">
                    {radioBtns[0].isActive ? <AnimalForm /> : <AssociationForm />}
                </div>
            </div>
        </div>
    );
}

import React, { useState, useRef, useEffect } from 'react';
import Image from 'next/image';
import './style.scss';

interface SelectProps {
    label: string;
    options: { name: string; value: string; isSelected: boolean }[];
    onChange: (event: React.ChangeEvent<HTMLSelectElement>) => void;
}

export default function Select({ label, options, onChange }: SelectProps) {
    const [isOpen, setIsOpen] = useState(false);
    const [focusedIndex, setFocusedIndex] = useState(-1);
    const dropdownRef = useRef<HTMLDivElement>(null);

    useEffect(() => {
        const handleClickOutside = (event: MouseEvent) => {
            if (dropdownRef.current && !dropdownRef.current.contains(event.target as Node)) {
                setIsOpen(false);
            }
        };

        document.addEventListener('mousedown', handleClickOutside);
        return () => document.removeEventListener('mousedown', handleClickOutside);
    }, []);

    // Reset focused index when opening/closing
    useEffect(() => {
        if (isOpen) {
            setFocusedIndex(-1);
        }
    }, [isOpen]);

    const handleOptionClick = (optionValue: string) => {
        const customEvent = {
            target: {
                value: optionValue,
            },
        } as Pick<React.ChangeEvent<HTMLSelectElement>, 'target'>;

        onChange(customEvent as React.ChangeEvent<HTMLSelectElement>);
    };

    const getSelectedCount = () => {
        if (Array.isArray(options) && typeof options[0] === 'object') {
            return (options as { name: string; value: string; isSelected: boolean }[]).filter(
                (option) => option.isSelected
            ).length;
        }
        return 0;
    };

    const getDisplayText = () => {
        const selectedCount = getSelectedCount();
        return `${selectedCount > 0 ? (selectedCount > 1 ? selectedCount + ' sélectionnés' : selectedCount + ' sélectionné') : 'Aucun filtre'} `;
    };
    const handleKeyDown = (e: React.KeyboardEvent) => {
        if (!Array.isArray(options) || options.length === 0) return;

        switch (e.key) {
            case 'Enter':
            case ' ': // Space
                e.preventDefault();
                if (!isOpen) {
                    setIsOpen(true);
                } else if (focusedIndex >= 0) {
                    // Sélectionner l"option focusée
                    if (typeof options[0] === 'object') {
                        const option = (
                            options as { name: string; value: string; isSelected: boolean }[]
                        )[focusedIndex];
                        handleOptionClick(option.value);
                    } else {
                        // This branch is not needed since options are always objects
                    }
                }
                break;

            case 'Escape':
                setIsOpen(false);
                setFocusedIndex(-1);
                break;

            case 'ArrowDown':
                e.preventDefault();
                if (!isOpen) {
                    setIsOpen(true);
                    setFocusedIndex(0);
                } else {
                    setFocusedIndex((prev) => (prev < options.length - 1 ? prev + 1 : prev));
                }
                break;

            case 'ArrowUp':
                e.preventDefault();
                if (isOpen) {
                    setFocusedIndex((prev) => (prev > 0 ? prev - 1 : prev));
                }
                break;

            case 'Tab':
                if (isOpen) {
                    setIsOpen(false);
                }
                break;

            default:
                break;
        }
    };

    return (
        <div className="flex w-full flex-col gap-2 font-caveat">
            <p className="text-large">{label}</p>
            <div ref={dropdownRef} className="relative">
                <div
                    onClick={() => setIsOpen(!isOpen)}
                    onKeyDown={handleKeyDown}
                    tabIndex={0}
                    className="z-1 select flex w-52 cursor-pointer justify-between rounded-box rounded-xl border-solid border-custom-primary bg-white p-2 text-large shadow-sm"
                    role="combobox"
                    aria-expanded={isOpen}
                    aria-haspopup="listbox"
                    aria-controls="select-listbox"
                >
                    <span>{getDisplayText()}</span>
                    <Image src="/assets/icons/patte.svg" width={16} height={16} alt="" />
                </div>

                {isOpen && (
                    <div
                        className="absolute left-0 right-0 top-full z-50 mt-1 max-h-60 overflow-y-auto rounded-xl border border-custom-primary bg-white shadow-lg"
                        role="listbox"
                    >
                        {options?.length > 0 ? (
                            (options as { name: string; value: string; isSelected: boolean }[]).map(
                                (option, key) => (
                                    <div
                                        key={option.name}
                                        data-key={key}
                                        onClick={() => handleOptionClick(option.value)}
                                        onMouseEnter={() => setFocusedIndex(key)}
                                        className={`select-item cursor-pointer p-2 text-large hover:bg-slate-200 ${
                                            option?.isSelected ? 'isSelected' : ''
                                        } ${focusedIndex === key ? 'bg-slate-200' : ''}`}
                                        role="option"
                                        aria-selected={option.isSelected}
                                    >
                                        {option.value}
                                    </div>
                                )
                            )
                        ) : (
                            <div className="p-2 text-gray-500">Aucun valeur dans ce filtre</div>
                        )}
                    </div>
                )}
            </div>
            <div className="filters-list flex w-52 flex-wrap gap-2">
                {Array.isArray(options) &&
                    typeof options[0] === 'object' &&
                    (options as { name: string; value: string; isSelected: boolean }[]).map(
                        (option, key) => {
                            if (option.isSelected) {
                                return (
                                    <div
                                        onClick={() => handleOptionClick(option.value)}
                                        key={key}
                                        className="flex h-fit w-fit items-center justify-evenly gap-2 rounded-lg border-custom-secondary bg-custom-secondary p-1 text-lg"
                                    >
                                        <p>{option.value} </p>
                                        <span className="mt-[2px] flex w-[16px] items-center">
                                            <svg
                                                className="h-[16px] w-[16px]"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                strokeWidth="1.5"
                                                data-slot="icon"
                                                aria-hidden="true"
                                            >
                                                <path
                                                    d="M6 18 18 6M6 6l12 12"
                                                    strokeLinecap="round"
                                                    strokeLinejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                    </div>
                                );
                            }
                            return null;
                        }
                    )}
            </div>
        </div>
    );
}

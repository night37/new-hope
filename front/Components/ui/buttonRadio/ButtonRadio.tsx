import React from 'react';
import { ButtonRadio as ButtonRadioProps } from '@/types/buttonRadio.type';

export function ButtonRadio({ label, isActive, onClick, index }: ButtonRadioProps) {
    return (
        <button className="flex items-center gap-3" onClick={() => onClick(index)}>
            <input
                type="radio"
                readOnly
                tabIndex={-1}
                name={`radio-${label}`}
                className="radio-custom-secondary radio bg-white"
                checked={isActive}
            />
            <span className="w-max font-caveat text-xl">{label}</span>
        </button>
    );
}

import React from 'react';

type ButtonType = {
    label: string;
    isActive?: boolean;
};

export function ButtonRadio({ label, isActive }: ButtonType) {
    return (
        <div className="flex items-center gap-3">
            <input
                type="radio"
                readOnly
                name={`radio-${label}`}
                className="radio-custom-secondary radio bg-white"
                checked={isActive}
            />
            <span className="w-max font-caveat text-[20px] text-xl">{label}</span>
        </div>
    );
}

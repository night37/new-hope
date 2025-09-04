import React from 'react';


type ButtonType = {
    label: string,
    isActive?: boolean,
}

export function ButtonRadio({label, isActive}: ButtonType) {
    return (
        <div className="flex gap-3">
            <input type="radio" readOnly name={`radio-${label}`} className="radio radio-secondary" checked={isActive}/>
            <span className="w-max font-caveat text-[20px]">{label}</span>
        </div>
      
    );
}


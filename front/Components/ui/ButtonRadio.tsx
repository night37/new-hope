import React from 'react';


type ButtonType = {
    label: string,
    isActive?: boolean,
}

export function ButtonRadio({label, isActive}: ButtonType) {
    return (
        <>
            <input type="radio" name={`radio-${label}`} className="radio radio-secondary" checked={isActive}/>
            <span className="w-max">{label}</span>
        </>
      
    );
}


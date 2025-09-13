import React from "react";


type ButtonType = {
    label: string,
    isActive?: boolean,
}

export function ButtonRadio({label, isActive}: ButtonType) {
    return (
        <div className="flex gap-3 items-center">
            <input type="radio" readOnly name={`radio-${label}`} className="radio radio-custom-secondary bg-white" checked={isActive}/>
            <span className="w-max font-caveat text-[20px] text-xl">{label}</span>
        </div>
      
    );
}


import React from "react";

interface ButtonInterface {
    label: string,
    onClick?: (event: React.MouseEvent<HTMLButtonElement> | React.KeyboardEvent<HTMLButtonElement>  ) => void,
    type?: "button" | "submit" | "reset";
   
}

export const Button = ( {label, onClick, type="button" } : ButtonInterface ) => (
    <button className="font-caveat border-custom-secondary rounded-xl px-[20px] bg-custom-secondary hover:bg-custom-primary focus:bg-custom-primary active:bg-custom-secondary" type= {type} onClick={onClick} onKeyUp={onClick}>
        <p className="xl:text-2xl">
            {label}
        </p>
    </button>       
    );


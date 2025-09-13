import React from "react";

interface ButtonInterface {
    label: string,
    onClick?: (event: React.MouseEvent<HTMLButtonElement> | React.KeyboardEvent<HTMLButtonElement>  ) => void,
    type?: "button" | "submit" | "reset";
   
}

export const Button = ( {label, onClick, type="button" } : ButtonInterface ) => (
    <button className="btn font-caveat rounded-xl py-[11px] px-[20px] bg-secondary hover:bg-primary focus:bg-primary active:bg-secondary" type= {type} onClick={onClick} onKeyUp={onClick}>
        <p className="xl:text-2xl">
            {label}
        </p>
    </button>       
    );


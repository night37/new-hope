import React from "react";

interface ButtonInterface {
    label: string,
    onClick: (event: React.MouseEvent<HTMLButtonElement> | React.KeyboardEvent<HTMLButtonElement>  ) => void,
    type?: "button" | "submit" | "reset";
    fontsize?: string
   
}

export const Button = ( {label, onClick, type="button", fontsize="text-2xl" } : ButtonInterface ) => {
    
    const handleClick = (event: React.KeyboardEvent<HTMLButtonElement>) => {
        if ((event.key === 'Enter' || event.key === ' ') && onClick ) {
            onClick(event);
        }
    }
    return (
    <button className="font-caveat border-custom-secondary rounded-3xl px-[20px] bg-custom-secondary hover:bg-custom-primary focus:bg-custom-primary active:bg-custom-secondary" type= {type} onClick={(event)=>{onClick(event)}} onKeyUp={(event)=>{handleClick(event)}}>
        <p className={`${fontsize}`}>
            {label}
        </p>
    </button>       
    )
}
    
    


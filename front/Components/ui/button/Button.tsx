import React from 'react';

interface ButtonInterface {
    label: string;
    onClick: (
        event: React.MouseEvent<HTMLButtonElement> | React.KeyboardEvent<HTMLButtonElement>
    ) => void;
    type?: 'button' | 'submit' | 'reset';
    fontsize?: string;
}

export const Button = ({
    label,
    onClick,
    type = 'button',
    fontsize = 'lg:text-2xl text-md',
}: ButtonInterface) => {
    const handleClick = (event: React.KeyboardEvent<HTMLButtonElement>) => {
        if ((event.key === 'Enter' || event.key === ' ') && onClick) {
            onClick(event);
        }
    };
    return (
        <button
            className="rounded-3xl border-custom-secondary bg-custom-secondary px-[20px] font-caveat hover:bg-custom-primary focus:bg-custom-primary active:bg-custom-secondary"
            type={type}
            onClick={(event) => {
                onClick(event);
            }}
            onKeyUp={(event) => {
                handleClick(event);
            }}
        >
            <p className={`${fontsize}`}>{label}</p>
        </button>
    );
};

import React from 'react';

interface HeaderProps {
    name: string;
}

function Header({ name }: HeaderProps) {
    return (
        <div className="header-container mt-10 bg-custom-primary">
            <div className="container mx-auto">
                <h1 className="sr-only">Fiche détails de {name}</h1>
                <h2 className="title text-center font-caveat text-2xl font-bold xl:text-left">
                    {name}
                </h2>
            </div>
        </div>
    );
}

export default Header;

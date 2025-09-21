import React from 'react';


interface HeaderProps {
  name: string

}

function Header({ name }: HeaderProps) {
  return (
    <div className="header-container bg-custom-primary mt-10">
      <div className="container mx-auto">
        <h1 className="sr-only">Fiche détails de {name}</h1>
        <h2 className="title text-2xl font-bold font-caveat xl:text-left text-center">{name}</h2>
      </div>
    </div>
  );
}

export default Header;
// @flow
import * as React from 'react';
import Link from 'next/link'

type DirectionProps = {
  direction: string
}



export function Menu({ direction }: DirectionProps) {
  return (
    <ul className={` w-full color-custom-third flex flex-${direction} ${direction == "col" ? "justify-center h-full gap-5" : "justify-between "}`}>
      <li className='flex justify-center text-xl'><Link href="animalsSearch">TROUVER UN ANIMAL</Link></li>
      <li className='flex justify-center text-xl'><Link href="">TROUVER UNE ASSOCIATION </Link></li>
      <li className='flex justify-center text-xl'><Link href="">QUI SOMMES NOUS ?</Link></li>
      <li className='flex justify-center text-xl'><Link href="">NOUS SOUTENIR</Link></li>
      <li className='flex justify-center text-xl'><Link href={process.env.NEXT_PUBLIC_BACKEND_URL ?? "#"}>CONNEXION</Link></li>
    </ul>
  );
};
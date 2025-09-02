// @flow
import * as React from 'react';
import Link from 'next/link'

type DirectionProps = {
  direction : string
}



export function Menu({direction}: DirectionProps) {
  return (
            <ul className={` w-full color-third flex flex-${direction} ${direction == "col" ? "justify-center h-full gap-5" :"justify-between "}`}>
              <li className='flex justify-center'><Link href="">TROUVER UN ANIMAL</Link></li>
              <li className='flex justify-center'><Link href="">TROUVER UNE ASSOCIATION </Link></li>
              <li className='flex justify-center'><Link href="">QUI SOMMES NOUS ?</Link></li>
              <li className='flex justify-center'><Link href="">NOUS SOUTENIR</Link></li>
              <li className='flex justify-center'><Link href="">CONNEXION</Link></li>
            </ul>
  );
};
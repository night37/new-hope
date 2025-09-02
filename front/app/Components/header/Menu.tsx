// @flow
import * as React from 'react';
import Link from 'next/link'

export function Menu() {
  return (
            <ul className={`color-third flex w-full justify-between lg:col-span-8 col-span-10`}>
              <li><Link href="">TROUVER UN ANIMAL</Link></li>
              <li><Link href="">TROUVER UNE ASSOCIATION </Link></li>
              <li><Link href="">QUI SOMMES NOUS ?</Link></li>
              <li><Link href="">NOUS SOUTENIR</Link></li>
              <li><Link href="">CONNEXION</Link></li>
            </ul>
  );
};
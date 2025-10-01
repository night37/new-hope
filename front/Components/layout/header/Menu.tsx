// @flow
import * as React from 'react';
import Link from 'next/link';
import { DirectionProps } from '@/types/common.type';

export function Menu({ direction }: DirectionProps) {
    return (
        <ul
            className={`color-custom-third flex w-full flex-${direction} ${direction == 'col' ? 'h-full justify-center gap-5' : 'justify-between'}`}
        >
            <li className="flex justify-center text-xl">
                <Link href="animalsSearch">TROUVER UN ANIMAL</Link>
            </li>
            <li className="flex justify-center text-xl">
                <Link href="associationSearch">TROUVER UNE ASSOCIATION </Link>
            </li>
            <li className="flex justify-center text-xl">
                <Link href="">QUI SOMMES NOUS ?</Link>
            </li>
            <li className="flex justify-center text-xl">
                <Link href="">NOUS SOUTENIR</Link>
            </li>
            <li className="flex justify-center text-xl">
                <Link href={process.env.NEXT_PUBLIC_BACKEND_URL ?? '#'}>CONNEXION</Link>
            </li>
        </ul>
    );
}

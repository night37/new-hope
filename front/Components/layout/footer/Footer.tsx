import Image from 'next/image';
import Link from 'next/link';
import { FontType } from '@/types/common.type';

export const Footer = ({ font }: FontType) => {
    return (
        <footer className="mx-auto w-full bg-custom-secondary">
            <div
                className={`container mx-auto grid grid-cols-12 items-center gap-4 py-[16.5px] ${font.className}`}
            >
                <div className="col-span-12 mx-auto flex w-full justify-center lg:col-span-1 lg:justify-start">
                    <Image src="/img/logo.svg" width={80} height={70} alt="Logo du site New Hope" />
                </div>
                <div className="col-span-12 flex flex-col lg:col-span-10 lg:flex-row lg:gap-12">
                    <ul className="color-custom-third flex w-full flex-col">
                        <li className="flex justify-center lg:justify-end">
                            <Link href="">TROUVER UN ANIMAL</Link>
                        </li>
                        <li className="flex justify-center lg:justify-end">
                            <Link href="">TROUVER UNE ASSOCIATION </Link>
                        </li>
                        <li className="flex justify-center lg:justify-end">
                            <Link href="">QUI SOMMES NOUS ?</Link>
                        </li>
                    </ul>
                    <ul className="color-custom-third flex w-full flex-col">
                        <li className="flex justify-center lg:justify-start">
                            <Link href="">NOUS SOUTENIR</Link>
                        </li>
                        <li className="flex justify-center lg:justify-start">
                            <Link href="">CONNEXION</Link>
                        </li>
                        <li className="flex justify-center lg:justify-start">
                            <Link href="">MENTIONS LEGALES</Link>
                        </li>
                    </ul>
                </div>
                <div className="col-span-12 flex justify-center text-sm">
                    <p>New Hope © 2025 - Tous droits réservés </p>
                </div>
            </div>
        </footer>
    );
};

'use client';
import { useState, useEffect } from 'react';
import Image from 'next/image';
import Link from 'next/link';
import { Menu } from './Menu';
import './style.scss';

export function Header() {
    const [isOpen, setIsOpen] = useState(false);

    useEffect(() => {
        if (isOpen) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = 'unset';
        }

        return () => {
            document.body.style.overflow = 'unset';
        };
    }, [isOpen]);
    return (
        <header className={`w-full bg-custom-secondary px-10 font-caveat lg:px-0`}>
            <div
                className={`text-l container mx-auto grid grid-cols-12 items-center py-[16.5px] font-caveat`}
            >
                <div className="col-span-2 lg:col-span-3">
                    <Link href="/" className="z-10">
                        <Image
                            src="/img/logo.svg"
                            width={80}
                            height={70}
                            alt="Picture of the author"
                        />
                    </Link>
                </div>
                <div className="menu-container col-span-10 hidden lg:col-span-9 lg:block xl:col-span-9">
                    <Menu direction={'row'} />
                </div>
                <div className="menu-mobile-container z-10 col-span-10 flex justify-end lg:hidden">
                    <button onClick={() => setIsOpen(!isOpen)} className="z-10">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            strokeWidth={1.5}
                            stroke="currentColor"
                            className="size-6"
                        >
                            <path
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                            />
                        </svg>
                    </button>
                    <div
                        className={`absolute left-0 transition delay-150 duration-300 ease-in-out ${isOpen ? 'left-0 w-full' : 'left-full hidden w-0'} bottom-0 right-0 top-0 flex-col bg-custom-secondary`}
                    >
                        <Menu direction={'col'} />
                    </div>
                </div>
            </div>
        </header>
    );
}

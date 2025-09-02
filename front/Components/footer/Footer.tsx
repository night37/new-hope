import Image from "next/image"
import Link from "next/link"



type FooterProps = {
  font: { className: string }
};
export const Footer = ({font}: FooterProps) => {
    return (
        <footer className="bg-secondary w-full mx-auto ">
            <div className={`container grid grid-cols-12 py-[16.5px] gap-4 ${font.className}`}>
                <div className="lg:col-span-3 col-span-12 mx-auto">
                    <Image
                        src="/logo.svg"
                        width={80}
                        height={70}
                        alt="Picture of the author"
                    />
                </div>
                <div className="flex lg:col-span-6 col-span-12 lg:flex-row flex-col lg:gap-3">
                    <ul className="w-full color-third flex flex-col">
                        <li className="flex justify-center"><Link href="">TROUVER UN ANIMAL</Link></li>
                        <li className="flex justify-center"><Link href="">TROUVER UNE ASSOCIATION </Link></li>
                        <li className="flex justify-center"><Link href="">QUI SOMMES NOUS ?</Link></li>                    
                    </ul>
                    <ul className="w-full color-third flex flex-col">
                        <li className="flex justify-center"><Link href="">NOUS SOUTENIR</Link></li>
                        <li className="flex justify-center"><Link href="">CONNEXION</Link></li>
                        <li className="flex justify-center"><Link href="">MENTIONS LEGALES</Link></li>
                    </ul>
                </div>
                <div className="col-span-12 flex justify-center text-sm"><p>New Hope © 2025 - Tous droits réservés </p></div>
            </div>
        </footer>
    );
};
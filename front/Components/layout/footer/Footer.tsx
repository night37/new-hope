import Image from "next/image"
import Link from "next/link"



interface FooterProps  {
  font: { className: string }
};
export const Footer = ({font}: FooterProps) => {
    return (
        <footer className="bg-custom-secondary w-full mx-auto ">
            <div className={`container grid grid-cols-12 py-[16.5px]  mx-auto items-center gap-4 ${font.className}` }>
                <div className="lg:col-span-1 col-span-12 mx-auto w-full flex justify-center lg:justify-start">
                    <Image
                        src="img/logo.svg"
                        width={80}
                        height={70}
                        alt="Logo du site New Hope"
                    />
                </div>
                <div className="flex lg:col-span-10 col-span-12 lg:flex-row flex-col lg:gap-12">
                    <ul className="w-full color-custom-third flex flex-col">
                        <li className="flex justify-center lg:justify-end"><Link href="">TROUVER UN ANIMAL</Link></li>
                        <li className="flex justify-center lg:justify-end"><Link href="">TROUVER UNE ASSOCIATION </Link></li>
                        <li className="flex justify-center lg:justify-end"><Link href="">QUI SOMMES NOUS ?</Link></li>                    
                    </ul>
                    <ul className="w-full color-custom-third flex flex-col">
                        <li className="flex justify-center lg:justify-start"><Link href="">NOUS SOUTENIR</Link></li>
                        <li className="flex justify-center lg:justify-start"><Link href="">CONNEXION</Link></li>
                        <li className="flex justify-center lg:justify-start"><Link href="">MENTIONS LEGALES</Link></li>
                    </ul>
                </div>
                <div className="col-span-12 flex justify-center text-sm"><p>New Hope © 2025 - Tous droits réservés </p></div>
            </div>
        </footer>
    );
};
import Image from 'next/image'
import Link from 'next/link'
import { Menu } from './Menu'
import './style.scss'


type HeaderProps = {
  font: { className: string }
};

export function Header ({font}: HeaderProps) {
    return(
        <header className={`${font.className}   bg-secondary`}>
          <div className={`${font.className} text-l mx-auto px-[64px] py-[16.5px] grid items-center gap-[67px] grid-cols-12`}> 
            <Link href="/" className='col-span-2 lg:col-span-4'>
                <Image
                  src="/logo.svg"
                  width={80}
                  height={70}
                  alt="Picture of the author"
                />
            </Link>
            <Menu/>

          </div>
        </header> 
    )

}
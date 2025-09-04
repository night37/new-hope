"use client"
import { useState, useEffect } from "react"
import Image from "next/image"
import Link from "next/link"
import { Menu } from "./Menu"
import "./style.scss"




export function Header () {
    
  const [isOpen, setIsOpen] = useState(false)


  useEffect(() => {
    if (isOpen) {
      document.body.style.overflow = "hidden"
    } else {
      document.body.style.overflow = "unset"
    }

    return () => {
      document.body.style.overflow = "unset"
    }
  }, [isOpen])
    return(
        <header className={`font-caveat bg-secondary w-full`}>
          <div className={`font-caveat text-l container mx-auto py-[16.5px] grid items-center grid-cols-12`}> 
            <div className="col-span-2 lg:col-span-3 xl:col-span-5">
              <Link href="/" className="z-10">
                  <Image
                    src="/logo.svg"
                    width={80}
                    height={70}
                    alt="Picture of the author"
                  />
              </Link>
            </div>
            <div className="menu-container lg:col-span-9 xl:col-span-7 col-span-10 hidden lg:block">
              <Menu direction={"row"}/>
            </div>
            <div className="menu-mobile-container lg:hidden col-span-10 flex justify-end">
              <button onClick={()=> setIsOpen(!isOpen)} className="z-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                  <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </button>
              <div className={`transition delay-150 duration-300 ease-in-out absolute left-0 ${isOpen ? "left-0 w-full" : " w-0 hidden left-full"} right-0 top-0 bottom-0  bg-secondary flex-col`}>
                <Menu direction={"col"}/>
              </div>
            </div>
          </div>
        </header> 
    )

}
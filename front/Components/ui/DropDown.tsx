import Image from 'next/image'
import React from 'react'


type DropDownProps = {
  label : string,
  options : [{ name: string, value: string}] | []
}


export default function DropDown({label, options} : DropDownProps) {
  console.log(options);
  return (
    <div className="dropdown dropdown-center font-caveat  w-full">
      <p>{label}</p>
    <div tabIndex={0} role="button" className="btn m-1 border-solid rounded-xl border-primary flex justify-between">Toute les valeurs <Image src="/patte.svg" alt="" width={9} height={6}/></div>
      <ul tabIndex={0} className="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
        {options?.length > 0 ? options.map((option : { name: string, value: string }, key) => (
          <li key={option.name}><a key={key}>{option.value}</a></li>
        )) : <li><a>Aucun valeur dans ce filtre</a></li>}
      </ul>
</div>
  )
}

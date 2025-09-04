import Image from 'next/image'
import React from 'react'


type DropDownProps = {
  label : string,
  values : string[]
}


export default function DropDown({label, values} : DropDownProps) {
  return (
    <div className="dropdown dropdown-center font-caveat  w-full">
      <p>{label}</p>
    <div tabIndex={0} role="button" className="btn m-1 border-solid rounded-xl border-primary flex justify-between">Click  <Image src="/patte.svg" alt="" width={9} height={6}/></div>
      <ul tabIndex={0} className="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
        {values?.length > 0 ? values.map((value, key) => (
          <li key={key}><a>{value}</a></li>
        )) : <li><a>Aucun valeur dans ce filtre</a></li>}
      </ul>
</div>
  )
}

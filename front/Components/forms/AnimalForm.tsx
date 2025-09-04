import React from 'react'
import DropDown from "@/components/ui/DropDown"

export default function AnimalForm() {
  const  valueCount = 6

  const displayDropdown = () => {
    
  }
  return (
  <>
    <div className="col-span-3">
      <DropDown/>
    </div>
    <div className="col-span-3">
      <DropDown/>
    </div>
      <div className="col-span-3">
      <DropDown/>
    </div>
    <div className="col-span-3">
      <DropDown/>
    </div>

  </>
    
  )
}

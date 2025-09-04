import React from 'react'
import DropDown from "@/components/ui/DropDown"

export default function AnimalForm() {
  let valueCount = 6
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

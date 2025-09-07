import React, {useEffect, useState, useMemo}  from 'react'
import DropDown from "@/components/ui/DropDown"
import animalFilters from '@/app/api/filters/animalFilters'


type Filter = {
  [key: string] : string[]
}

export default function AnimalForm() {

  const [filters, setFilters] = useState<Filter[]>([]);

  useEffect(() => {
    const arrayFilters: Filter[] = []
    const fetchData = async () => {
      const data = await animalFilters();
      if(data) {
        for(const i in data) {
          arrayFilters.push({[i]: data [i]});
        }       
      }
      setFilters(arrayFilters);
    };
    fetchData();
  }, []);

  return (
  <>
    {filters.length > 0 && filters.map((filter, key) => (
        console.log(filter[Object.keys(filter)[0]]),
        <div key={key} className="col-span-3">
          <DropDown label={Object.keys(filter)[0]} options={filter[Object.keys(filter)[0]]}/>
        </div>
      ))}
  </>
    
  )
}


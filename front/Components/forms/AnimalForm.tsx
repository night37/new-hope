import React, {useEffect, useState}  from 'react'
import Select from "@/Components/ui/Select/Select"
import { animalFilters } from '@/app/api/filters/animalFilters'
import { filtersResults }from '@/app/api/filters/animalFilters'


interface FilterOption  {
  isSelected: boolean;
  name: string;
  value: string;
  fieldName: string
};

interface Filter  {
    [key: string]: FilterOption[];
}



export default function AnimalForm() {

  const [filters, setFilters] = useState<Filter[]>([]);

  useEffect(() => {
    const arrayFilters: Filter[] = []
    const fetchData = async () => {
      const filtersList = await animalFilters();
      if(filtersList) {
        for(const i in filtersList) {
          const addIselectedToArray = filtersList[i].data.map((el: Filter) => {
            return {fieldName:filtersList[i].field_name, isSelected : false ,  name: el.name, value: el.value}})
          arrayFilters.push({[i]: addIselectedToArray });
        }       
      }
      setFilters(arrayFilters);
    };
    fetchData();
  }, []);

  const onChange = (event: React.ChangeEvent<HTMLSelectElement>) :void =>  {
    setFilters(el => el.map(itemList => 
      Object.keys(itemList).reduce((acc: {[key: string]: FilterOption[]}, item) => {
        const findIndex = itemList[item].findIndex(element => element.value === event.target.value)
        
        if(findIndex !== -1){
          acc[item] = itemList[item].map((option, index) => 
            index === findIndex ? { ...option, isSelected: !option.isSelected } : option
          )
        } else {
          acc[item] = itemList[item]
        }
        
        return acc
      }, {} as {[key: string]: FilterOption[]})
    ))
  }

  const submitForm = (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    const filterlist: Array <FilterOption>  = []

    filters.forEach((filter) => {
      Object.keys(filter).forEach((el) => {
        filter[el].map((value)=> {
          if(value.isSelected) {
            filterlist.push(value)
          }
        })
       
      })
    })
    console.log(filterlist);
    filtersResults(filterlist)
  }

  return (
  <form className="w-full flex flex-wrap gap-5"  onSubmit={(e)=> {submitForm(e)}}>
    {filters.length > 0 ? filters.map((filter, key) => (
        <div key={key}>
          <Select label={Object.keys(filter)[0]} options={filter[Object.keys(filter)[0]]} onChange={onChange}/>
        </div>
      )) : <span className='font-caveat text-xl flex justify-center w-full'><p className='border p-4 border-black'>Une erreur serveur est survenue </p></span>}
        <div className='w-full flex justify-center  '>
          <button className='btn font-caveat rounded-xl py-[11px] px-[20px] bg-secondary' type="submit">
            <p className='text-2xl'>
              Trouver votre nouveau compagnon
            </p>
          </button>
        </div>
  </form>
    
  )
}


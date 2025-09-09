import React, {useEffect, useState}  from 'react'
import Select from "@/Components/ui/Select/Select"
import animalFilters from '@/app/api/filters/animalFilters'


type FilterOption = {
  isSelected: boolean;
  name: string;
  value: string;
};

type Filter = {
  [key: string]: FilterOption[];
}

export default function AnimalForm() {

  const [filters, setFilters] = useState<Filter[]>([]);

  useEffect(() => {
    const arrayFilters: Filter[] = []
    const fetchData = async () => {
      const data = await animalFilters();
      if(data) {
        for(const i in data) {
          const addIselectedToArray = data[i].map((el: {name:string, value: string}) => {
            return {isSelected : false ,  name: el.name, value: el.value}})
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
  return (
  <>
    {filters.length > 0 && filters.map((filter, key) => (
        <div key={key}>
          <Select label={Object.keys(filter)[0]} options={filter[Object.keys(filter)[0]]} onChange={onChange}/>
        </div>
      ))}
  </>
    
  )
}


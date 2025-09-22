import React, {useEffect, useMemo, useState}  from "react"
import Select from "@/Components/ui/Select/Select"
import { animalFilters, filtersResults } from "@/api/filters/animals"
import { Button } from "@/Components/ui/Button/Button"
import { useAnimalStore } from "@/store/animalStore"
import { useRouter, usePathname } from 'next/navigation'


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
  const [loading, setLoading] = useState <boolean>(true)
  const [error, setError] = useState<boolean>(false);
  const [searchParametersIsLoading, setSearchParametersIsLoading] = useState<boolean>(false)
  const setSearchParameters = useAnimalStore((state) => state.updateSearchParameters)
  const searchParameters =  useAnimalStore((state) => state.searchParameters)
  const router = useRouter()
  const currentPath = usePathname()




  useEffect(() => {
    const arrayFilters: Filter[] = []

    const fetchData = async () => {
    try {   
      const filtersList = await animalFilters();
      
      if(filtersList) {
        for(const i in filtersList) {
          const addIselectedToArray = filtersList[i].data.map((el: Filter) => {
            return {fieldName:filtersList[i].field_name, isSelected : false ,  name: el.name, value: el.value}
          })
          arrayFilters.push({[i]: addIselectedToArray });
        }       
      }
      
      setFilters(arrayFilters);
      
    } catch (error) {
      console.error('Error loading filters:', error);
      setError(true);
    } finally {
      setLoading(false)
    }
    
  };
  fetchData()
    
  }, []);

  
  useEffect(() => {
    const newArray: Filter[] = []
    if(searchParameters?.length > 0 && filters.length > 0  ) {
      filters.forEach((itemList) => {
        searchParameters.forEach((param :FilterOption) => {
          Object.keys(itemList).forEach((key) => {
            itemList[key] = itemList[key].map((item) => {
              if(item.name === param.name) {
                item.isSelected = true
              }
              return item
            })
          })
        })
        newArray.push(itemList)
      })
    }
    if(newArray.length > 0 && filters.length > 0 && !searchParametersIsLoading && searchParameters?.length > 0) {
      console.log("je passe ici");
      console.log("new arrayyyyyyy",newArray);
      setFilters([...newArray])
      // setFilters((oldValues) => {
        //   let newValues = [...oldValues]
        //   newValues = newArray
        //   return newValues
        // })
        setSearchParametersIsLoading(true)
      } 



   },[filters, searchParametersIsLoading])

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
            // je spreed car sinon il alter l objet original
              filterlist.push({ ...value });
          }
        })
       
      })
    })
    setSearchParameters(filterlist)
    filtersResults(filterlist)

    
    if(currentPath != "/animalsSearch") {
      router.push("/animalsSearch")
    } 

  }

  const renderSelect = useMemo(() => {
    return filters.map((filter, key) => (
      <div key={key}>
        <Select label={Object.keys(filter)[0]} options={filter[Object.keys(filter)[0]]} onChange={onChange}/>
      </div>
    ))
  }, [filters])

  return (
    <form className="w-full flex flex-wrap gap-5 justify-center lg:justify-start"  onSubmit={(e)=> {submitForm(e)}}>
    {filters.length > 0 && renderSelect}
    {loading ? <div className="w-full flex justify-center"><span className="loading loading-spinner text-custom-secondary"></span></div>: 
      error && <span className="font-caveat text-xl flex justify-center w-full"><p className="border p-4 border-black">Une erreur serveur est survenue </p></span>}
        <div className="w-full flex justify-center">
          <Button label={"Trouver votre nouveau compagnon"} type={"submit"} onClick={() => {}}/>
        </div>
  </form>
    
  )
}


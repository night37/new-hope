import React, {useState, useEffect} from 'react'
import { useAnimalStore} from '@/store/animalStore'
import { filtersResults } from '@/api/filters/animals'

interface PaginationProps {
    totalPages: number

}
    


export function Pagination({totalPages} :PaginationProps) {

const [pageArray, setPageArray] = useState<number[]>([])
const searchParameters = useAnimalStore((state) => state.searchParameters);
const setSearchResults = useAnimalStore((state) => state.setSearchResults);




useEffect(() => {
    const indexArray = []

    for (let i = 1; i <= totalPages; i++) {
        indexArray.push(i)
    }

    setPageArray(indexArray)


}, [totalPages])


const fetchApi = async(page : number) => {   
    const result = await filtersResults(searchParameters, page)
    console.log(result);
      setSearchResults(result);


}


  return (
    <div className="join mx-auto">
        {pageArray.map((page,key) => {
           return (
               <input 
                    className="join-item btn btn-square" 
                    type="radio" 
                    key={key} 
                    name="options" 
                    aria-label={page.toString()} 
                    onClick={()=> {fetchApi(page)}}
                    defaultChecked={page === 1}
                />
           )

        })}

</div>
  )
}

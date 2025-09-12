interface filter  {
  fieldName: string, 
  name: string,
  value: string,
  isSelected: boolean,
}

type Filters = filter[]


export async function animalFilters() {
  const response = await fetch(`${process.env.NEXT_PUBLIC_BACKEND_URL}/animal/filters`);
  const data = await response.json();
  return data;
}

export async function filtersResults(filters :Filters) {

  const filterList :Filters = [];
  if(filters.length > 0) {
    let qb :string = ""


    filters.forEach((filter, key) => {
      const findFilterIndex = filterList.findIndex(el => el?.fieldName === filter.fieldName)
      const fieldNameToLower = filter.fieldName.toLowerCase()
   

      
      if( fieldNameToLower !== "breed" && fieldNameToLower !== "affinity"){
        if(findFilterIndex == -1 ){
          filterList.push(filter)
        }else {
          if(!filterList[findFilterIndex].value.includes(filter.value)){
           
            filterList[findFilterIndex].value +=`,${filter.value}`
          }
        }
      }else{
        qb+= `${fieldNameToLower}[]=${filter.value.toLowerCase()}&`

      }
    });

    filterList.forEach((el,key) => {
      qb+= `${el.fieldName.toLowerCase()}=${el.value}${filterList.length -1 === key ? "&" : ""}`
      
    });
    if(qb[qb.length-1] === "&"){
      qb = qb.slice(0,-1)
    }
    const response = await fetch(`${process.env.NEXT_PUBLIC_BACKEND_URL}/animal/filtersResults?${qb}`);
    const data = await response.json();
    return data;
  }
  
    
}



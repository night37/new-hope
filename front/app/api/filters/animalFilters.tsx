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
  if(filters.length > 0) {
    let qb :string = ""

    filters.forEach((filter, key) => {
      console.log(filter);
      qb+= `${filter.fieldName.toLowerCase()}=${filter.value.toLowerCase()}${key < filters.length-1 ? "&" : ""}`
    });
    const response = await fetch(`${process.env.NEXT_PUBLIC_BACKEND_URL}/animal/filtersResults?${qb}`);
    const data = await response.json();
    console.log(data);
    // return data;
  }
  
    
}



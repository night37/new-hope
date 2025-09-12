interface filter  {
  filter: string, 
  value: string}


type filtersQuery = filter[]






export async function animalFilters() {
  const response = await fetch(`${process.env.NEXT_PUBLIC_BACKEND_URL}/animal/filters`);
  const data = await response.json();
  console.log(data);
  return data;
}

export async function filtersResults(query:filtersQuery) {
  const buidQuery = query
  // const response = await fetch(`${process.env.NEXT_PUBLIC_BACKEND_URL}/animal/filtersResults?`);
  // const data = await response.json();
  // return data;
}



export async function animalFilters() {
  const response = await fetch(`${process.env.NEXT_PUBLIC_BACKEND_URL}/animal/filters`);
  const data = await response.json();
  return data;
}

export async function filtersResults(query) {
  console.log(query);
  // const response = await fetch(`${process.env.NEXT_PUBLIC_BACKEND_URL}/animal/filtersResults?`);
  // const data = await response.json();
  // return data;
}



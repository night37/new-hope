async function animalFilters() {
  const response = await fetch(`${process.env.NEXT_PUBLIC_BACKEND_URL}/api/animal/filters`);
  const data = await response.json();
  return data;
}

export default animalFilters;
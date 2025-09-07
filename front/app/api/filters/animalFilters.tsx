async function animalFilters() {
  const response = await fetch('https://new-hope.ddev.site/api/animal/filters');
  const data = await response.json();
  return data;
}

export default animalFilters;
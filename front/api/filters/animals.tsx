interface Filter {
  fieldName: string,
  name: string,
  value: string,
  isSelected: boolean,
}

type Filters = Filter[]


export async function animalFilters() {
  try {
    const response = await fetch(`${process.env.NEXT_PUBLIC_BACKEND_URL}/animal/filters`);

    if (!response.ok) {
      throw new Error(`HTTP ${response.status}: ${response.statusText}`);
    }

    const data = await response.json();
    return data;

  } catch (err) {
    console.error('Erreur lors du chargement des filtres:', err);
    throw err;
  }

}

export async function filtersResults(filters: Filters) {

  const filterList: Filters = [];
  if (filters.length > 0) {
    let qb: string = ""


    filters.forEach((filter) => {
      const findFilterIndex = filterList.findIndex(el => el?.fieldName === filter.fieldName)
      const fieldNameToLower = filter.fieldName.toLowerCase()



      if (fieldNameToLower !== "breed" && fieldNameToLower !== "affinity") {
        if (findFilterIndex == -1) {
          filterList.push(filter)
        } else {
          if (!filterList[findFilterIndex].value.includes(filter.value)) {

            filterList[findFilterIndex].value += `,${filter.value}`
          }
        }
      } else {
        qb += `${fieldNameToLower}[]=${filter.value.toLowerCase()}&`

      }
    });

    filterList.forEach((el, key) => {
      qb += `${el.fieldName.toLowerCase()}=${el.value}${filterList.length - 1 === key ? "&" : ""}`

    });
    if (qb[qb.length - 1] === "&") {
      qb = qb.slice(0, -1)
    }
    try {
      const response = await fetch(`${process.env.NEXT_PUBLIC_BACKEND_URL}/animal/filtersResults?${qb}`);

      if (!response.ok) {
        throw new Error(`HTTP ${response.status}: ${response.statusText}`);
      }

      const data = await response.json();
      return data;

    } catch (err) {
      console.error('Erreur lors du chargement des resultats:', err);
      throw err;
    }
  }
  console.warn('le tableau filtre est vide ou est inexistant')
  return


}


export async function getLastAnimalsList() {
  try {
    const response = await fetch(`${process.env.NEXT_PUBLIC_BACKEND_URL}/animal/getRandomLastAnimals`);

    if (!response.ok) {
      throw new Error(`HTTP ${response.status}: ${response.statusText}`);
    }

    const data = await response.json();
    return data;

  } catch (err) {
    console.error('Erreur lors du chargement des animaux:', err);
    throw err;
  }
}

export async function findById(id: number) {
  if (typeof (id) === "number" && id) {
    try {
      const response = await fetch(`${process.env.NEXT_PUBLIC_BACKEND_URL}/animal/findById?id=${id}`);
      if (!response.ok) {
        throw new Error(`HTTP ${response.status}: ${response.statusText}`);
      }
      const data = await response.json();
      return data;
    } catch (err) {
      console.error('Erreur lors de la recherche par ID:', err);
      throw err;
    }
  }
  console.error("l'id est obligatoire et doit être de type number");
  return

}

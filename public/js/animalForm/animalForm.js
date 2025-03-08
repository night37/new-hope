const typeField = document.querySelector("#Animal_type");
let list;

fetch("/js/animalForm/breedList.json")
  .then((response) => {
    if (!response.ok) {
      throw new Error(
        `Erreur réseau : ${response.status} ${response.statusText}`
      );
    }
    return response.text();
  })
  .then((text) => {
    console.log("Contenu brut reçu :", text);
    list = JSON.parse(text); // Essayez de le parser
    console.log("JSON converti :", breedList);
  })
  .catch((error) => {
    console.error("Erreur lors du chargement JSON :", error);
  });

document.addEventListener("DOMContentLoaded", function () {
  const breedDropdown = document.querySelector("#Animal_Breed-ts-control");
  const typeField = document.querySelector("#Animal_type"); // Champ pour savoir si c'est "cat" ou "dog"
  const targetNode = document.querySelector("#Animal_Breed-ts-dropdown"); // La dropdown où sont les options

  if (!breedDropdown || !typeField || !targetNode) {
    console.error(
      "Un ou plusieurs éléments nécessaires dans le DOM sont introuvables."
    );
    return;
  }

  // Fonction pour filtrer les options
  const filterOptions = () => {
    const options = targetNode.querySelectorAll(".option");

    options.forEach((option) => {
      const breedName = option.textContent.trim();
      const isDog = list.dogs.includes(breedName);
      const isCat = list.cats.includes(breedName);

      // Logique => Affiche/masque en fonction de la sélection
      if (typeField.value === "0" || typeField.value === "") {
        option.style.display = isDog ? "block" : "none";
      } else if (typeField.value === "1") {
        option.style.display = isCat ? "block" : "none";
      }
    });
  };

  // Configuration de MutationObserver
  const observer = new MutationObserver((mutationsList) => {
    for (const mutation of mutationsList) {
      if (mutation.type === "childList") {
        observer.disconnect(); // Stopper l'observation temporairement
        filterOptions(); // Filtrer les options (éviter les boucles inutiles)
        observer.observe(targetNode, { childList: true }); // Reconnecter l'observateur
      }
    }
  });

  // Démarrer l'observation
  observer.observe(targetNode, { childList: true });

  // Exécuter le filtrage à chaque clic
  breedDropdown.addEventListener("click", function () {
    filterOptions();
  });
});

export default function deleteBtnOnPicture(file, src, event) {
  const fileInput = event.target.closest(".custom-file").querySelector("input");
  const label = event.target.closest(".custom-file").querySelector("label");

  console.log(fileInput.id);

  // Filtrer les fichiers restants, sauf celui à supprimer
  const remainingFiles = Array.from(fileInput.files).filter((fileItem) => {
    return fileItem.name !== file.name;
  });

  console.log("Fichiers restants :", remainingFiles);

  if (remainingFiles.length >= 0) {
    // Créer un nouvel `input` pour remplacer l'ancien
    const newFileInput = document.createElement("input");
    newFileInput.type = "file";
    newFileInput.multiple = true; // Assurer que l'utilisateur puisse ajouter plusieurs fichiers
    newFileInput.name = fileInput.name; // Préserver le `name` d'origine si nécessaire
    newFileInput.className = fileInput.className; // Conserver les styles/catégories (classes CSS) du champ input
    newFileInput.id = fileInput.id;

    // Ajouter les fichiers restants dans le nouveau champ via `DataTransfer`
    const dataTransfer = new DataTransfer();
    remainingFiles.forEach((file) => {
      dataTransfer.items.add(file); // Ajouter chacun des fichiers restants
    });
    newFileInput.files = dataTransfer.files; // Assigner les fichiers au nouvel input

    // Remplacer l'ancien input par le nouveau
    // Accéder au label associé

    if (label) {
      label.innerText =
        remainingFiles.length > 1
          ? `${remainingFiles.length} fichiers`
          : remainingFiles[0]?.name || "Aucun fichier sélectionné";
    }
    fileInput.replaceWith(newFileInput);

    // Mettre à jour le texte du label (si un label est présent)

    // Supprimer l'image correspondante dans l'affichage
    const image = document.querySelector(`[data-image-path="${src}"]`);
    if (image) {
      image.parentElement.remove();
    }
  }
}

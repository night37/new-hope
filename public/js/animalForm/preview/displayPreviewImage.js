import displayImage from "./displayImage.js";

export default function displayPreviewImage(previewContainer, fileInput, e) {

  if (e?.target.files.length > 0) {
    previewContainer.innerHTML = "";
    Array.from(e.target.files).forEach((file) => {
     
      if (file) {
        const reader = new FileReader();
        // displayImage(previewContainer, fileInput, e.target.result);
        reader.onload = function (e) {
          console.log("je passe dans la condition",file)
          displayImage(previewContainer, fileInput, e.target.result);
        };

        reader.readAsDataURL(file);
      }
    });
  } else {
    let labels = fileInput?.parentNode.querySelectorAll("label");

    labels.forEach((label) => {
      previewContainer.innerHTML = "";
      let file = `/uploads/animals/${label.innerText}`;
      if (
        file?.includes("jpg") ||
        file?.includes("jpeg") ||
        file?.includes("png") ||
        file?.includes("webp")
      ) {
        displayImage(previewContainer, fileInput, file);
      }
    });
  }
}

import displayPreviewImage from "./displayPreviewImage.js";
import generateContainer from "./generateContainer.js";

document.addEventListener("DOMContentLoaded", function () {
  const filesInput = document.querySelectorAll('input[type="file"]');
  if (filesInput.length > 0) {
    filesInput.forEach((fileInput) => {
      const previewContainer = document.createElement("div");
      generateContainer(previewContainer, fileInput);
      displayPreviewImage(previewContainer, fileInput);

      fileInput.addEventListener("change", function (e) {
        if (e.target.files.length > 0) {
          displayPreviewImage(previewContainer, fileInput, e);
          
        }
      });
    });
  }
});

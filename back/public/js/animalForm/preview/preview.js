import deletePreviewImages from "./deletePreviewImages.js";
import displayPreviewImages from "./displayPreviewImages.js";
import generateContainer from "./generateContainer.js";

document.addEventListener("DOMContentLoaded", function () {
  const filesInput = document.querySelectorAll('input[type="file"]');
  const deleteButtons = document.querySelectorAll(".ea-fileupload-delete-btn");

  if (deleteButtons.length > 0) {
    deleteButtons.forEach((deleteButton) => {
      deleteButton.addEventListener("click", function (e) {
        deletePreviewImages(deleteButton);
      });
    });
  }

  if (filesInput.length > 0) {
    filesInput.forEach((fileInput) => {
      const previewContainer = document.createElement("div");
      generateContainer(previewContainer, fileInput);
      displayPreviewImages(previewContainer, fileInput);

      fileInput.addEventListener("change", function (e) {
        if (e.target.files.length > 0) {
          displayPreviewImages(previewContainer, fileInput, e);
        }
      });
    });
  }
});

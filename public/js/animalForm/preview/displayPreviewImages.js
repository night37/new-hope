import displayImage from "./displayImage.js";

export default function displayPreviewImages(previewContainer, fileInput, e) {
  if (e?.target.files.length > 0) {
    previewContainer.innerHTML = "";
    Array.from(e.target.files).forEach((file) => {
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
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
      } else {
        let list = document.querySelector(".fileupload-list");
        let table = list.querySelector(".fileupload-table");
        list.style.position = "absolute";
        list.style.opacity = 0;
        list.style.width = 0;
        list.style.top = "-9999px";
        let tableInnerText = table.innerText.split(" ");
        let getpicturesUrl = tableInnerText.map((innerText) => {
          if (innerText.length > 0) {
            return innerText.split("\t")[0];
          }
        });
        getpicturesUrl.forEach((url) => {
          if (url) {
            displayImage(
              previewContainer,
              fileInput,
              `/uploads/animals/${url}`
            );
          }
        });
      }
    });
  }
}

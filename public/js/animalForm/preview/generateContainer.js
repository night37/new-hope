export default function generateContainer(previewContainer, fileInput) {
  previewContainer.classList.add("upload-preview-container");
  previewContainer.style.display = "flex";
  previewContainer.style.flexWrap = "wrap";
  previewContainer.style.marginTop = "50px";

  fileInput.parentNode.appendChild(previewContainer);
}

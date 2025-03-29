export default function displayImage(previewContainer, fileInput, src) {
  const previewImage = document.createElement("img");

  previewImage.style.maxWidth = "150px";
  previewImage.style.maxHeight = "150px";
  previewImage.style.border = "1px solid #ddd";
  previewImage.style.borderRadius = "5px";

  previewImage.src = src;
  previewImage.style.display = "block";
  previewContainer.appendChild(previewImage);
  fileInput.parentNode.appendChild(previewContainer);
  previewImage.style.display = "block";
}

export default function deletePreviewImages(deleteButton) {
  let getParent = deleteButton.closest(".ea-fileupload");
  getParent.querySelector(".upload-preview-container").innerHTML = "";
}

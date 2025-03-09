document.addEventListener("DOMContentLoaded", function () {
  const filesInput = document.querySelectorAll('input[type="file"]'); 
  if (filesInput.length > 0) {
    filesInput.forEach((fileInput) => {
      const previewContainer = document.createElement("div");
      previewContainer.classList.add("upload-preview-container"); 
      previewContainer.style.display = "flex";
      previewContainer.style.flexWrap = "wrap";
      previewContainer.style.marginTop  = "50px";
      const previewImage = document.createElement("img"); 
      
      previewImage.style.maxWidth = "150px";
      previewImage.style.maxHeight = "150px";
      previewImage.style.border = "1px solid #ddd";
      previewImage.style.borderRadius = "5px";
      previewImage.style.display = "none"; 


      previewContainer.appendChild(previewImage);
      fileInput.parentNode.appendChild(previewContainer);

      fileInput.addEventListener("change", function (e) {
        if(e.target.files.length > 0){
          Array.from(e.target.files).forEach(file => {
            if (file) {
              const reader = new FileReader();
              reader.onload = function (e) {

                const previewImage = document.createElement("img"); 
      
                previewImage.style.maxWidth = "150px";
                previewImage.style.maxHeight = "150px";
                previewImage.style.border = "1px solid #ddd";
                previewImage.style.borderRadius = "5px";
              
              
                previewImage.src = e.target.result;
                previewImage.style.display = "block"; 
                previewContainer.appendChild(previewImage);
                fileInput.parentNode.appendChild(previewContainer);
              };
    
              reader.readAsDataURL(file); 
            } else {
              previewImage.style.display = "none"; 
            }


          })
          
        
       
          
        }else{
          const file = e.target.files[0];
          if (file) {
            const reader = new FileReader();
  
            reader.onload = function (e) {
              previewImage.src = e.target.result;
              previewImage.style.display = "block"; // Afficher la miniature après sélection
            };
  
            reader.readAsDataURL(file); // Traiter le fichier choisi
          } else {
            previewImage.style.display = "none"; // Cacher s'il n'y a pas de fichier
          }
        }
      });
    });
  }
});

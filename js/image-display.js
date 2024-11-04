function displayImage(imageSrc, imageDescription, additionalText = "") {
  const displayedImage = document.getElementById("displayed-image");
  const description = document.getElementById("image-description");

  // Update the image and description
  displayedImage.src = imageSrc;
  description.innerHTML = `<span class="large-bold">${imageDescription}</span><br><span class="large-text">${additionalText}</span>`;

  // Show the image
  displayedImage.style.display = "block";
}

// Hide the image on section scroll
document.querySelectorAll(".section").forEach((section) => {
  section.addEventListener("scroll", function () {
    document.getElementById("displayed-image").style.display = "none";
  });
});

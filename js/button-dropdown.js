// button-dropdown.js

// Fungsi untuk menampilkan gambar
function displayImage(imageSrc, description) {
  const displayedImage = document.getElementById("displayed-image");
  const imageDescription = document.getElementById("image-description");

  displayedImage.src = imageSrc;
  displayedImage.alt = description;
  displayedImage.style.display = "block";
  imageDescription.textContent = description;
}

// Fungsi untuk bergerak ke kiri
function moveLeft() {
  // Logika untuk bergerak ke gambar sebelumnya
}

// Fungsi untuk bergerak ke kanan
function moveRight() {
  // Logika untuk bergerak ke gambar selanjutnya
}

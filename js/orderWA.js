const drinks = [
  {
    name: "Jus Jeruk Wortel",
    imageUrl: "image/jeruk wortel.jpg",
    price: 7000,
  },
  {
    name: "Jus Jeruk Belimbing",
    imageUrl: "image/belimbing.jpg",
    price: 7000,
  },
  {
    name: "Jus orange",
    imageUrl: "image/jus-orange.webp",
    price: 7000,
  },
  {
    name: "Jus Jeruk Srikaya",
    imageUrl: "image/jeruk srikaya.jpg",
    price: 7000,
  },
  {
    name: "Jus Jeruk Asli",
    imageUrl: "image/jeruk doang.jpg",
    price: 7000,
  },
];

function orderWhatsApp(namaMinuman) {
  const phoneNumber = "6285772771373"; // Nomor WhatsApp dengan kode negara
  const message = `Halo, saya ingin memesan ${namaMinuman}. Apakah tersedia?`;
  const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(
    message
  )}`;
  window.open(url, "_blank");
}

function updateImage(index) {
  const selectedDrink = drinks[index];
  const displayedImage = document.getElementById("displayed-image");
  const imageDescription = document.getElementById("image-description");

  displayedImage.src = selectedDrink.imageUrl;
  displayedImage.style.display = "block";
  imageDescription.innerHTML = `
    <strong>${selectedDrink.name}</strong><br>
    Harga: Rp${selectedDrink.price.toLocaleString()}<br>
    Apakah Anda ingin memesan ${selectedDrink.name}?
  `;

  // Klik gambar review untuk langsung pesan via WhatsApp
  displayedImage.onclick = () => orderWhatsApp(selectedDrink.name);
}

function toggleMode() {
  const body = document.body;
  const toggleImage = document.getElementById("toggleImage");

  // Periksa apakah mode terang aktif
  if (body.classList.contains("light-mode")) {
    // Ganti ke mode gelap
    body.classList.replace("light-mode", "dark-mode");
    toggleImage.src = "image/bulan.png"; // Ganti ikon untuk mode gelap
    toggleImage.alt = "Mode Terang"; // Ubah teks alternatif
  } else {
    // Ganti ke mode terang
    body.classList.replace("dark-mode", "light-mode");
    toggleImage.src = "image/matahari.png"; // Ganti ikon untuk mode terang
    toggleImage.alt = "Mode Gelap"; // Ubah teks alternatif
  }
}

// Pasang fungsi toggleMode pada tombol
document.getElementById("toggleImage").onclick = toggleMode; // Menggunakan gambar sebagai tombol

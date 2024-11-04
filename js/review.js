let rating = 0;

// Fungsi untuk memperbarui status bintang
function updateStars(rating) {
  document.querySelectorAll(".fa-star").forEach((star) => {
    star.classList.toggle(
      "checked",
      star.getAttribute("data-rating") <= rating
    );
  });
}

// Fungsi untuk menyimpan ulasan ke Local Storage
function saveReviewsToLocalStorage(reviews) {
  localStorage.setItem("reviews", JSON.stringify(reviews));
}

// Fungsi untuk memuat ulasan dari Local Storage
function loadReviewsFromLocalStorage() {
  const savedReviews = localStorage.getItem("reviews");
  return savedReviews ? JSON.parse(savedReviews) : [];
}

// Fungsi untuk menampilkan ulasan
function displayReviews(reviews) {
  const reviewList = document.getElementById("reviews-list");
  reviewList.innerHTML = "<h2>Ulasan Pengguna:</h2>"; // Reset konten ulasan

  reviews.forEach((review) => {
    const reviewItem = document.createElement("div");
    reviewItem.classList.add("review-item");

    const starSpan = document.createElement("span");
    starSpan.classList.add("review-stars");
    starSpan.innerHTML = "★".repeat(review.rating); // Mengisi bintang sesuai rating

    const reviewTextElement = document.createElement("p");
    reviewTextElement.textContent = review.text;

    reviewItem.append(starSpan, reviewTextElement); // Menambahkan bintang dan teks ke ulasan
    reviewList.appendChild(reviewItem); // Menambahkan ulasan ke daftar
  });
}

// Fungsi untuk mengirim ulasan
function submitReview() {
  const reviewText = document.getElementById("review-text").value;

  // Memeriksa apakah rating dan ulasan valid
  if (rating > 0 && reviewText.trim() !== "") {
    const reviews = loadReviewsFromLocalStorage();
    reviews.push({ rating, text: reviewText }); // Menambahkan ulasan baru

    saveReviewsToLocalStorage(reviews); // Menyimpan ke Local Storage
    displayReviews(reviews); // Menampilkan semua ulasan

    // Reset input dan rating
    document.getElementById("review-text").value = "";
    updateStars(0);
    rating = 0; // Reset rating setelah ulasan disubmit
  } else {
    alert("Silakan pilih jumlah bintang dan tulis ulasan Anda."); // Peringatan
  }
}

// Mengatur event click pada bintang
document.querySelectorAll(".fa-star").forEach((star) => {
  star.addEventListener("click", function () {
    rating = this.getAttribute("data-rating");
    updateStars(rating); // Memperbarui bintang berdasarkan rating yang dipilih
  });
});

// Memuat dan menampilkan ulasan saat halaman dimuat
window.onload = function () {
  const reviews = loadReviewsFromLocalStorage();
  displayReviews(reviews);
};

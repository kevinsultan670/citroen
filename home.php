<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <title>Citroen</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-x: hidden;
            transition: background-color 0.3s, color 0.3s;
            /* Transition for smooth mode switch */
        }

        .top-video {
            width: 100vw;
            height: 90vh;
            object-fit: cover;
            display: block;
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 90vh;
        }

        .cc-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 100px;
            width: auto;
            z-index: 1000;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #7E7E7E;
            padding: 10px 20px;
            color: white;
            z-index: 1000;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .ui-buttons {
            display: flex;
            align-items: center;
            margin-left: 20px;
        }

        .section-divider {
            width: 100%;
            height: 3px;
            background: linear-gradient(to right, #ff8a00, #e52e71);
            /* Gradasi warna */
            margin: 40px 0;
            border-radius: 5px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            /* Bayangan untuk efek 3D */
        }

        .white-section {
            padding: 20px;
            background-color: #f5f5f5;
            text-align: center;
        }

        .yellow-section,
        .blue-section,
        .green-section,
        .purple-section,
        .red-section {
            padding: 20px;
            margin: 0 -10px;
        }

        .yellow-section {
            background-color: rgba(255, 204, 0, 0.9);
            /* Kuning gelap */
            color: black;
        }

        .blue-section {
            background-color: rgba(0, 102, 204, 0.9);
            /* Biru gelap */
            color: whitesmoke;
            padding-top: 100px;
        }

        .green-section {
            background-color: rgba(0, 153, 0, 0.9);
            /* Hijau gelap */
            color: black;
            /* Mengubah warna teks menjadi putih untuk kontras yang lebih baik */
        }

        .purple-section {
            background-color: rgba(85, 0, 85, 0.9);
            /* Ungu gelap */
            color: cyan;
        }

        .red-section {
            background-color: rgba(204, 0, 0, 0.9);
            /* Merah gelap */
            color: whitesmoke;
            margin-bottom: 8px;
        }

        h1 {
            margin-top: 0;
        }

        .footer {
            background-color: rgba(92, 92, 92, 0.8);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .footer a {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .footer img,
        .ui-button {
            height: 30px;
            cursor: pointer;
            margin-right: 5px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            margin-left: 5px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #deff4a;
            min-width: 60px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            left: -50px;
            font-family: Arial, sans-serif;
            /* Ganti dengan font yang diinginkan */
            font-size: 14px;
            /* Ukuran font */
            font-weight: normal;
            /* Atur tebal font (normal, bold, dsb) */
            color: black;
            text-align: center;
        }

        .dropdown-content.show {
            display: block;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #1c9943;
        }

        .cc-button-fixed {
            height: 55px;
            cursor: default;
            position: fixed;
            top: 5px;
            left: 10px;
            z-index: 1000;
        }

        body {
            transition: background-color 0.3s, color 0.3s;
            /* Untuk transisi yang halus */
        }

        body.light-mode {
            background-color: white;
            color: black;
        }

        body.dark-mode {
            background-color: #343a40;
            color: white;
        }

        .toggle-button {
            display: none;
            /* Sembunyikan tombol ini secara default */
        }

        .dropdown-content.show .toggle-button {
            display: block;
            /* Tampilkan saat dropdown aktif */
        }

        .image-container {
            display: flex;
            justify-content: center;
            /* Menyusun gambar ke tengah */
            align-items: center;
            /* Menyelaraskan gambar secara vertikal */
            margin-top: 250px;
            /* Menambahkan jarak atas untuk memisahkan dari judul */
        }

        .image-box {
            background-color: orangered;
            /* Warna latar belakang cyan */
            padding: 10px;
            /* Jarak dalam kotak */
            border-radius: 8px;
            /* Sudut yang membulat */
            margin: 10px;
            /* Jarak antar kotak */
            height: 200px;
            /* Tinggi kotak yang lebih besar */
            width: 150px;
            /* Lebar kotak */
            display: flex;
            /* Menyusun gambar ke dalam kotak */
            align-items: center;
            /* Mengatur gambar ke bagian tengah kotak */
            justify-content: center;
            /* Mengatur gambar ke tengah secara horizontal */
            cursor: pointer;
            /* Menampilkan pointer saat hover */
            margin-top: -120px;
        }

        .image-box img {
            max-width: 100%;
            /* Ensure the image doesn't exceed the width of the box */
            max-height: 100%;
            /* Ensure the image doesn't exceed the height of the box */
            object-fit: cover;
            /* Cover the box while maintaining the image's aspect ratio */
            border-radius: 6px;
            /* Optional: slightly rounded corners for images */
        }

        #home img {
            height: 100%;
            /* Menggunakan tinggi kotak untuk menjaga proporsi */
            width: 100%;
            /* Menggunakan lebar kotak untuk menjaga proporsi */
            object-fit: cover;
            /* Mengatur gambar agar menutupi kotak */
        }

        .selected-image {
            text-align: center;
            margin-top: 20px;
        }

        .selected-image img {
            width: 300px;
            /* Atur ukuran gambar yang ditampilkan */
            height: auto;
        }

        .large-bold {
            font-weight: bold;
            font-size: 1.5em;
            /* Anda dapat mengubah nilai ini sesuai kebutuhan */
        }

        .large-text {
            font-size: 1.5em;
            /* Anda dapat mengubah nilai ini sesuai kebutuhan */
        }

        .review-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .star-rating {
            text-align: center;
            margin-bottom: 10px;
        }

        .fa-star {
            font-size: 2em;
            color: #ccc;
            cursor: pointer;
        }

        .fa-star.checked {
            color: gold;
        }

        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .button-container {
            display: flex;
            /* Mengatur kontainer menjadi fleksibel */
            justify-content: center;
            /* Menyusun tombol di tengah */
            margin-top: 20px;
            /* Spasi atas untuk jarak */
        }

        .button-container button {
            border: none;
            /* Menghapus border */
            background: none;
            /* Menghapus latar belakang */
            cursor: pointer;
            /* Mengubah kursor menjadi pointer saat hover */
            margin: 0 10px;
            /* Spacing horizontal antara tombol */
            transition: transform 0.2s;
            /* Efek transisi saat hover */
        }

        .button-container button:hover {
            transform: scale(1.1);
            /* Membesarkan tombol saat dihover */
        }

        .button-container img {
            width: 50px;
            /* Ukuran gambar */
            height: 50px;
            /* Ukuran gambar */
        }


        .review-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        #reviews-list {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border-top: 2px solid #ccc;
            margin-top: 20px;
        }

        .review-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .review-item h3 {
            margin: 0;
            font-size: 1.2em;
        }

        .review-item p {
            margin: 5px 0;
        }

        .review-item .review-stars {
            color: gold;
        }
    </style>
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<body class="light-mode">
    <audio id="background-music" loop>
        <source src="audio cinematic jeruk.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>

    <div class="header">
        <div class="ui-buttons">
            <img src="play.png" alt="Play/Pause" id="play-pause-button" class="ui-button" onclick="toggleMusic()" aria-label="Tombol play/pause musik">
            <img src="matahari.png" alt="light/dark" id="toggleImage" class="ui-button" onclick="toggleMode()" aria-label="Tombol light/dark mode" style="width: 40px; height: 45px;">
            <div class="dropdown">
                <img class="ui-button" src="z.png" alt="Z" id="toggle-button">
                <div class="dropdown-content">
                    <a href="#video" data-target="video">Home</a>
                    <a href="#menu" data-target="menu">Menu</a>
                    <a href="#harga" data-target="harga">Harga</a>
                    <a href="#label" data-target="label">Label</a>
                    <a href="#foto" data-target="foto">Lokasi</a>
                    <a href="#footer" data-target="footer">About</a>
                </div>
            </div>
        </div>
    </div>

    <img src="remove.png" alt="logo remove" class="cc-button-fixed">

    <div class="content">
        <div class="video-container">
            <video class="top-video" id="video" autoplay muted loop playsinline>
                <source src="Cinematic pohon jeruk.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <img src="remove.png" alt="Logo remove" class="cc-button">
        </div>

        <div id="home" class="section white-black-section">
            <h1>Selamat Datang di "Citroen" - Sensasi Jeruk yang Menyegarkan Jiwa</h1>
            <p>Siapkan dirimu untuk merasakan kesegaran luar biasa dari setiap tetes jus jeruk yang kami peras langsung dari buah jeruk pilihan terbaik. Di "Citroen!", kami percaya bahwa jus jeruk bukan sekedar minuman biasa. Ini adalah ledakan vitamin C yang segar, manis, dan penuh energi.</p>
        </div>

        <div class="section-divider"></div>

        <div id="menu" class="section white-black-section">
            <center>
                <h1>Daftar Menu</h1>
            </center>
            <div class="selected-image">
                <div class="image-container">
                    <p id="image-description">Silahkan Ingin Pesan Apa?.</p>
                    <img id="displayed-image" src="" alt="Gambar yang dipilih" style="display: none;">
                </div>
                <div class="image-container">
                    <div class="image-box" onclick="displayImage('jeruk wortel.jpg', ' jus jeruk wortel ', 'tes')">
                        <img src="jeruk wortel.jpg" alt="Gambar jeruk wortel">
                    </div>
                    <div class="image-box" onclick="displayImage('jeruk belimbing.jpg', ' jus jeruk belimbing ', 'tes')">
                        <img src="jeruk belimbing.jpg" alt="Gambar jeruk belimbing">
                    </div>
                    <div class="image-box" onclick="displayImage('jeruk semangka.jpg', ' jus jeruk semangka', 'tes')">
                        <img src="jeruk semangka.jpg" alt="Gambar jeruk semangka">
                    </div>
                    <div class="image-box" onclick="displayImage('jeruk srikaya.jpg', 'jus jeruk srikaya ', 'tes')">
                        <img src="jeruk srikaya.jpg" alt="Gambar jeruk srikaya">
                    </div>
                    <div class="image-box" onclick="displayImage('jeruk doang.jpg', '  jus jeruk asli ', 'tes')">
                        <img src="jeruk doang.jpg" alt="Gambar jeruk doang">
                    </div>
                    <div class="button-container">
                        <button onclick="moveLeft()">
                            <img src="bagian kiri.png" alt="Kiri">
                        </button>
                        <button onclick="moveRight()">
                            <img src="bagian kanan.png" alt="Kanan">
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="section-divider"></div>

    <div id="harga" class="section white-black-section">
        <center>
            <h1>Promo Diskon</h1>
        </center>

    </div>

    <div class="section-divider"></div>

    <div id="label" class="section white-black-section">
        <center>
            <h1>Ulasan</h1>
        </center>

    </div>

    <div class="review-container">
        <div class="star-rating">
            <span class="fa fa-star" data-rating="1"></span>
            <span class="fa fa-star" data-rating="2"></span>
            <span class="fa fa-star" data-rating="3"></span>
            <span class="fa fa-star" data-rating="4"></span>
            <span class="fa fa-star" data-rating="5"></span>
        </div>
        <textarea id="review-text" rows="4" placeholder="Tulis ulasan Anda di sini..."></textarea>
        <button onclick="submitReview()">Kirim Ulasan</button>
    </div>
    <div id="reviews-list" class="section white-black-section">
        <h2>Ulasan Pengguna:</h2>
        <!-- Ulasan akan muncul di sini -->
    </div>

    <div class="section-divider"></div>

    <div id="foto" class="section white-black-section">
        <h1>Lokasi Kita</h1>
        <p>Rumah Ridwan.</p>
        <div style="width: 100%; height: 400px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3965.2594383360447!2d106.733796!3d-6.360458!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69efa7a6f775fd%3A0xc594d9e6b0a286a6!2sPamulang%20Elok!5e0!3m2!1sen!2sus!4v1728216596255!5m2!1sen!2sus"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>

    <div id="footer" class="footer">
        <p> 2024 Citroen. Semua Hak Cipta Dilindungi.</p>
        <a href="https://www.facebook.com/sultanajisaputra12?mibextid=JRoKGi" target="_blank">
            <img src="fb.png" alt="FB">
        </a>

        <a href="https://wa.me/685520776807" target="_blank">
            <img src="wa.jpg" alt="WA">
        </a>

        <a href="https://www.instagram.com/aoi_no_akuma/profilecard/?igsh=N2thNm1jNnI4NHM1" target="_blank">
            <img src="i.png" alt="I">
        </a>

        <a href="https://www.tiktok.com/@sultansaputra70?_t=8qHQvjxwBgw&_r=1" target="_blank">
            <img src="tt.png" alt="TT">
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        function toggleDropdown() {
            const dropdownContent = document.querySelector('.dropdown-content');
            dropdownContent.classList.toggle('show');
        }
        // Fungsi untuk menutup dropdown jika pengguna mengklik di luar dropdown
        window.onclick = function(event) {
            if (!event.target.matches('#toggle-button')) {
                const dropdowns = document.getElementsByClassName("dropdown-content");
                for (let i = 0; i < dropdowns.length; i++) {
                    const openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        };

        // Smooth scrolling
        document.querySelectorAll('.dropdown-content a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('data-target');
                const targetElement = document.getElementById(targetId);

                // Lakukan smooth scroll ke elemen target
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        function displayImage(imageSrc, imageDescription, additionalText = '') {
            const displayedImage = document.getElementById('displayed-image');
            const description = document.getElementById('image-description');

            // Update gambar dan deskripsi
            displayedImage.src = imageSrc;
            description.innerHTML = `<span class="large-bold">${imageDescription}</span><br><span class="large-text">${additionalText}</span>`;

            // Tampilkan gambar
            displayedImage.style.display = 'block';
        }

        // Fungsi untuk menampilkan atau menyembunyikan dropdown
        function toggleDropdown() {
            const dropdownContent = document.querySelector('.dropdown-content');
            dropdownContent.classList.toggle('show');
        }

        // Menambahkan event listener untuk tombol dropdown
        document.getElementById('toggle-button').onclick = toggleDropdown;

        // Fungsi untuk mengganti mode gelap dan terang
        function toggleMode() {
            var body = document.body;
            var toggleImage = document.getElementById("toggleImage");

            if (body.classList.contains("light-mode")) {
                body.classList.replace("light-mode", "dark-mode");
                toggleImage.src = "bulan.png"; // Ganti dengan gambar mode gelap
                toggleImage.alt = "Mode Terang";
            } else {
                body.classList.replace("dark-mode", "light-mode");
                toggleImage.src = "matahari.png"; // Ganti dengan gambar mode terang
                toggleImage.alt = "Mode Gelap";
            }
        }

        // Menambahkan event listener untuk tombol mode
        document.getElementById('toggle-mode-button').onclick = toggleMode;

        //Menutup dropdown jika pengguna mengklik di luar
        window.onclick = function(event) {
            if (!event.target.matches('#toggle-button')) {
                const dropdowns = document.getElementsByClassName('dropdown-content');
                for (let i = 0; i < dropdowns.length; i++) {
                    dropdowns[i].classList.remove('show');
                }
            }
        };
        // Menyembunyikan gambar saat menggulir ke bagian lain
        const sections = document.querySelectorAll('.section');
        sections.forEach(section => {
            section.addEventListener('scroll', function() {
                document.getElementById('displayed-image').style.display = 'none'; // Sembunyikan gambar saat menggulir
            });
        });
        // Function to toggle music
        function toggleMusic() {
            var music = document.getElementById("background-music");
            if (music.paused) {
                music.play();
                document.getElementById("play-pause-button").src = "stop.png"; // Update button to pause image
            } else {
                music.pause();
                document.getElementById("play-pause-button").src = "play.png"; // Update button to play image
            }
        }

        // Add Event Listener for mode toggle button
        document.getElementById('toggle-button').addEventListener('click', toggleMode);
    </script>

    <script>
        let currentIndex = 0;
        const images = [{
                src: 'jeruk wortel.jpg',
                description: 'jus jeruk wortel'
            },
            {
                src: 'jeruk belimbing.jpg',
                description: 'jus jeruk belimbing'
            },
            {
                src: 'jeruk semangka.jpg',
                description: 'jus jeruk semangka'
            },
            {
                src: 'jeruk srikaya.jpg',
                description: 'jus jeruk srikaya'
            },
            {
                src: 'jeruk doang.jpg',
                description: 'jus jeruk asli'
            },
        ];

        function displayImage(imageSrc, description) {
            const imgElement = document.getElementById('displayed-image');
            const descElement = document.getElementById('image-description');

            imgElement.src = imageSrc;
            imgElement.alt = description;
            imgElement.style.display = 'block';
            descElement.innerText = description;

            // Update the current index
            currentIndex = images.findIndex(img => img.src === imageSrc);
        }

        function moveLeft() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateDisplayedImage();
        }

        function moveRight() {
            currentIndex = (currentIndex + 1) % images.length;
            updateDisplayedImage();
        }

        function updateDisplayedImage() {
            const imgElement = document.getElementById('displayed-image');
            const descElement = document.getElementById('image-description');

            imgElement.src = images[currentIndex].src;
            imgElement.alt = images[currentIndex].description;
            descElement.innerText = images[currentIndex].description;
        }
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        // Show SweetAlert on page load and auto-close after 10 seconds
        window.onload = function() {
            swal({
                title: "Selamat Datang di Citroen!",
                text: "Nikmati kesegaran jus jeruk kami!",
                icon: "success",
                buttons: false, // Disable the button
                timer: 10000 // Auto-close after 10 seconds
            });
        };
    </script>
    <script>
        let position = 0; // Posisi awal gambar
        const step = 20; // Jarak pergeseran

        function moveLeft() {
            position -= step; // Geser ke kiri
            updateImagePosition();
        }

        function moveRight() {
            position += step; // Geser ke kanan
            updateImagePosition();
        }

        function updateImagePosition() {
            const image = document.getElementById('image');
            image.style.transform = `translateX(${position}px)`;
        }

        //ulasan
        let rating = 0;

        // Fungsi untuk mengatur rating bintang
        document.querySelectorAll('.fa-star').forEach(star => {
            star.addEventListener('click', function() {
                rating = this.getAttribute('data-rating');
                updateStars(rating);
            });
        });

        function updateStars(rating) {
            document.querySelectorAll('.fa-star').forEach(star => {
                if (star.getAttribute('data-rating') <= rating) {
                    star.classList.add('checked');
                } else {
                    star.classList.remove('checked');
                }
            });
        }

        // Fungsi untuk menyimpan ulasan ke Local Storage
        function saveReviewsToLocalStorage(reviews) {
            localStorage.setItem('reviews', JSON.stringify(reviews));
        }

        // Fungsi untuk mengambil ulasan dari Local Storage
        function loadReviewsFromLocalStorage() {
            const savedReviews = localStorage.getItem('reviews');
            if (savedReviews) {
                return JSON.parse(savedReviews);
            }
            return [];
        }

        // Fungsi untuk menampilkan ulasan di halaman
        function displayReviews(reviews) {
            const reviewList = document.getElementById('reviews-list');
            reviewList.innerHTML = '<h2>Ulasan Pengguna:</h2>'; // Reset ulasan lama

            reviews.forEach(review => {
                const reviewItem = document.createElement('div');
                reviewItem.classList.add('review-item');

                // Tambahkan bintang ke ulasan
                const starSpan = document.createElement('span');
                starSpan.classList.add('review-stars');
                for (let i = 0; i < review.rating; i++) {
                    starSpan.innerHTML += '★';
                }

                // Tambahkan teks ulasan ke elemen ulasan
                const reviewTextElement = document.createElement('p');
                reviewTextElement.textContent = review.text;

                // Gabungkan bintang dan teks ulasan
                reviewItem.appendChild(starSpan);
                reviewItem.appendChild(reviewTextElement);

                // Tambahkan ulasan baru ke daftar ulasan
                reviewList.appendChild(reviewItem);
            });
        }

        // Fungsi untuk mengirim ulasan dan menampilkannya
        function submitReview() {
            const reviewText = document.getElementById('review-text').value;
            if (rating > 0 && reviewText.trim() !== '') {
                // Ambil ulasan yang sudah ada
                const reviews = loadReviewsFromLocalStorage();

                // Tambahkan ulasan baru
                const newReview = {
                    rating: rating,
                    text: reviewText
                };
                reviews.push(newReview);

                // Simpan ulasan ke Local Storage
                saveReviewsToLocalStorage(reviews);

                // Tampilkan ulasan
                displayReviews(reviews);

                // Reset form setelah ulasan dikirim
                document.getElementById('review-text').value = '';
                updateStars(0); // Reset bintang
            } else {
                alert('Silakan pilih jumlah bintang dan tulis ulasan Anda.');
            }
        }

        // Saat halaman dimuat, tampilkan ulasan yang tersimpan
        window.onload = function() {
            const reviews = loadReviewsFromLocalStorage();
            displayReviews(reviews);
        };
        // buat hapus ulasan
        // window.onload = function() {
        // Menghapus semua ulasan dari local storage
        //localStorage.clear();

        //     const reviews = loadReviewsFromLocalStorage();
        //displayReviews(reviews);
        // };
    </script>
</body>

</html>

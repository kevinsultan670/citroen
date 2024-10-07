<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            margin-right: 10px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            margin-left: 10px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            left: -100px;
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
            background-color: #f1f1f1;
        }

        .cc-button-fixed {
            height: 55px;
            cursor: default;
            position: fixed;
            top: -3px;
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
    </style>
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<body class="light-mode">
    <audio id="background-music" loop>
        <source src="audio cinematic jeruk.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>

    <div class="header">
        <div class="ui-buttons">
            <img src="play.png" alt="Play/Pause" id="play-pause-button" class="ui-button" onclick="toggleMusic()" aria-label="Tombol play/pause musik">
            <img src="matahari.png" alt="Light Mode" id="light-mode-button" class="ui-button" onclick="setLightMode()" aria-label="Switch to Light Mode">
            <img src="bulan.png" alt="Dark Mode" id="dark-mode-button" class="ui-button" onclick="setDarkMode()" aria-label="Switch to Dark Mode" style="display: none;">
            <div class="dropdown">
                <img class="ui-button" src="z.png" alt="Z" id="toggle-button">
                <div class="dropdown-content">
                    <a href="#video" class="scroll" data-target="video">Home</a>
                    <a href="#menu" class="scroll" data-target="menu">Menu</a>
                    <a href="#label" class="scroll" data-target="label">Label</a>
                    <a href="#lokasi" class="scroll" data-target="lokasi">Lokasi</a>
                    <a href="#foto" class="scroll" data-target="foto">Harga</a>
                    <a href="#footer" class="scroll" data-target="footer">About</a>
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
                <p id="image-description">Silahkan Ingin Pesan Apa?.</p>
                <img id="displayed-image" src="" alt="Gambar yang dipilih" style="display: none;">
            </div>
            <div class="image-container">
                <div class="image-box" onclick="displayImage('jeruk wortel.jpg')">
                    <img src="jeruk wortel.jpg" alt="Gambar jeruk wortel">
                </div>
                <div class="image-box" onclick="displayImage('jeruk belimbing.jpg')">
                    <img src="jeruk belimbing.jpg" alt="Gambar jeruk belimbing">
                </div>
                <div class="image-box" onclick="displayImage('jeruk semangka.jpg')">
                    <img src="jeruk semangka.jpg" alt="Gambar jeruk semangka">
                </div>
                <div class="image-box" onclick="displayImage('jeruk srikaya.jpg')">
                    <img src="jeruk srikaya.jpg" alt="Gambar jeruk srikaya">
                </div>
                <div class="image-box" onclick="displayImage('jeruk doang.jpg')">
                    <img src="jeruk doang.jpg" alt="Gambar jeruk doang">
                </div>
            </div>
        </div>
    </div>

    <div class="section-divider"></div>

    <div id="label" class="section white-black-section">
        <h1>Label Kita</h1>
        <p>Ini adalah konten untuk bagian ungu.</p>
    </div>

    <div class="section-divider"></div>

    <div id="lokasi" class="section white-black-section">
        <h1>Lokasi Kita</h1>
        <p>Rumah Ridwan.</p>
        <div style="width: 100%; height: 400px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2538870104563!2d106.72858257364055!3d-6.3611775622265485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69efa7a6f775fd%3A0xc594d9e6b0a286a6!2sPamulang%20Elok!5e0!3m2!1sen!2sus!4v1728208262461!5m2!1sen!2sus"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>

    <div id="footer" class="footer">
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
        // Menutup dropdown jika pengguna mengklik di luar dropdown
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
        }
        // Smooth scrolling
        $('.scroll').on('click', function(e) {
            e.preventDefault();
            $('.dropdown-content').removeClass('show'); // close dropdown after selecting an item
            var target = $(this).data('target');
            $('html, body').animate({
                scrollTop: $('#' + target).offset().top
            }, 500);
        });
        // Menampilkan gambar yang diklik
        function displayImage(imageSrc) {
            const displayedImage = document.getElementById('displayed-image');
            const description = document.getElementById('image-description');
            displayedImage.src = imageSrc;
            displayedImage.style.display = 'block'; // Tampilkan gambar
            description.innerText = "Anda telah memilih gambar: " + imageSrc; // Mengubah teks deskripsi
        }
        // Mengatur tampilan dropdown
        document.getElementById('toggle-button').onclick = function() {
            const dropdownContent = document.querySelector('.dropdown-content');
            dropdownContent.classList.toggle('show');
        };
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

        // Mode switch function
        function setLightMode() {
            document.body.classList.remove('dark-mode');
            document.body.classList.add('light-mode');
            document.getElementById('light-mode-button').style.display = 'none';
            document.getElementById('dark-mode-button').style.display = 'inline'; // Tampilkan tombol dark mode
        }

        function setDarkMode() {
            document.body.classList.remove('light-mode');
            document.body.classList.add('dark-mode');
            document.getElementById('dark-mode-button').style.display = 'none';
            document.getElementById('light-mode-button').style.display = 'inline'; // Tampilkan tombol light mode
        }


        // Add Event Listener for mode toggle button
        document.getElementById('toggle-button').addEventListener('click', toggleMode);
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
</body>

</html>
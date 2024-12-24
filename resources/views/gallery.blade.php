<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karang Taruna - Gallery</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="navbar">
            <h1>Karang Taruna Rw 14</h1>
        </div>
        
        <nav>
            <a href="{{ url('/index#home') }}">Home</a>
            <a href="{{ url('/index#about') }}">About</a>
            <a href="{{ url('/index#feedback') }}">Feedback</a>
            <a href="gallery.html">Gallery</a>
        </nav>
    </header>

    <div class="gallery-container">
        <aside class="gallery-sidebar">
            <h2>Our Activities</h2>
            <ul>
                <li><a href="#sungaiBersih">Sungai Bersih</a></li>
                <li><a href="#pbRacket">PB Racket Cup</a></li>
                <li><a href="#17Agustus">17 Agustus</a></li>
                <li><a href="#garis">Garis</a></li>
            </ul>
        </aside>

        <section class="gallery-content">
            <h2>Activity Gallery</h2>
            <P>klik aktivitas untuk melihat foto-foto kami</P>

            <div id="sungaiBersih" class="activity-gallery">
                <div class="gallery-item">
                    <video controls height="200" width="300">
                        <source src="sungai/vid1.mp4" type="video/mp4" alt="Sungai Bersih 1">
                    </video>
                    <p>Sungai Bersih - Cleaning the river for World River Day.</p>
                </div>
            </div>

            <div id="pbRacket" class="activity-gallery">
                <div class="gallery-item">
                    <img src="{{ asset('images/pbracket1.jpg') }}" alt="pbracket1" class="symbol-image">
                    <!-- <img src="pb/pbracket1.jpg" alt="PB Racket Cup 1">
                    <p>PB Racket Cup - Collaborative tournament with racket community.</p> -->
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/pbracket2.jpg') }}" alt="pbracket2" class="symbol-image">
                    <!-- <img src="pb/pbracket2.jpg" alt="PB Racket Cup 2">
                    <p>PB Racket Cup - Exciting matches.</p> -->
                </div>
            </div>

            <div id="17Agustus" class="activity-gallery">
                <div class="gallery-item">
                    <img src="{{ asset('images/_MG_0949.jpg') }}" alt="_MG_0949" class="symbol-image">
                    <!-- <img src="17/_MG_0949.JPG" alt="17 Agustus 1">
                    <p>17 Agustus - antri lomba sedotan.</p> -->
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/_MG_1001.jpg') }}" alt="_MG_1001" class="symbol-image">
                    <!-- <img src="17/_MG_1001.JPG" alt="17 Agustus 2">
                    <p>17 Agustus - juara 1 lomba estafet sedotan.</p> -->
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/_MG_1048.jpg') }}" alt="_MG_1048" class="symbol-image">
                    <!-- <img src="17/_MG_1048.JPG" alt="17 Agustus 2">
                    <p>17 Agustus - juara 2 lomba estafet sedotan.</p> -->
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/foto1.jpg') }}" alt="foto1" class="symbol-image">
                    <!-- <img src="17/foto1.JPG" alt="17 Agustus 2">
                    <p>17 Agustus - sosialisasi loma estafet sedotan.</p> -->
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/foto2.jpg') }}" alt="foto2" class="symbol-image">
                    <!-- <img src="17/foto2.JPG" alt="17 Agustus 2">
                    <p>17 Agustus - menunggu giliran main.</p> -->
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/foto3.jpg') }}" alt="foto3" class="symbol-image">
                    <!-- <img src="17/foto3.JPG" alt="17 Agustus 2">
                    <p>17 Agustus - juara 3 lomba estafet sedotan.</p> -->
                </div>
            </div>

            <div id="garis" class="activity-gallery">
                <div class="gallery-item">
                    <img src="{{ asset('images/majelis2.jpg') }}" alt="majelis1" class="symbol-image">
                    <!-- <img src="garis/foto2.jpg" alt="Garis 2">
                    <p>Garis - sambutan ketua garis.</p> -->
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/majelis3.jpg') }}" alt="majelis2" class="symbol-image">
                    <!-- <img src="garis/foto3.jpg" alt="Garis 2">
                    <p>Garis - peserta yang mengikuti pengajian.</p> -->
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/majelis4.jpg') }}" alt="majelis3" class="symbol-image">
                    <!-- <img src="garis/foto4.jpg" alt="Garis 2">
                    <p>Garis - remaja garis.</p> -->
                </div>
                <div class="gallery-item">
                    <video width="320" height="240" controls class="symbol-mp4">
                        <source src="{{ asset('images/vid1.mp4') }}" type="video1/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div>
                <div class="gallery-item">
                    <video width="320" height="240" controls class="symbol-image">
                        <source src="{{ asset('images/vid2.mp4') }}" type="video2/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <p>Contact Us</p>
        <p>Email: info@karangtarunau14.com</p>
        <p>Phone: +62852-8126-2229</p>
    </footer>
</body>
</html>

<?php
declare(strict_types=1);

require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";
?>

<!DOCTYPE html>
<html lang="id"><
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title><?=  e($namaCamp) ?> - Pusat Latihan Tinju Resmi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="navbar">
    <div class="container navbar__inner">
        <a href="index.php" class="brand">
            <img src="assets/logo.jpeg" alt="Logo Pertina" class="brand__logo" width="42" height="42">
            <span><?=  e($namaCamp) ?></span>
        </a>
        <nav class="nav-menu">
            <a href="index.php" class="active">Profil</a>
            <a href="katalog.php">Katalog Jadwal</a>
            <a href="#kontak" class="btn-primary">Daftar Sekarang</a>
        </nav>
    </div>
</header>

<main>
    <!-- Hero Section -->
     <section class="hero">
        <video autoplay loop muted playsinline class="hero__video">
            <source src="assets/Hero.mp4" type="video/mp4">
            Browser kamu tisak mendukung video background.
        </video>

        <div class="hero__overlay"></div>

        <div class="container hero__content">
            <span class="tagline">Pusat Pembinaan & Latihan Tinju Kabupaten Sukoharjo</span>
            <h1>Dari Ring Latihan Menuju Panggung Kehormatan</h1>
            <p>Membina mental disiplin, ketahanan fisik, dan prestasi olahraga tinju dari level pemula hingga siap bertanding di tingkat nasional.</p>
            <div class="hero__buttons">
                <a href="katalog.php" class="btn-primary">Lihat Jadwal Latihan</a>
                <a href="#biaya" class="btn-secondary">Informasi Biaya</a>
            </div>
        </div>
     </section>

     <!-- Kartu Pilihan Kelas Latihan (Sore / Malam) -->
      <section class="section container" id="kelas">
        <div class="section=title">
            <h2>Pilihan Waktu Latihan</h2>
            <p>Hari Latihan Rutin: <st>Minggu, Selasa, & Jum'at</strong></p>
        </div>
        <div class="grid grid--2">
            <article class="card card--highlight">
                <span class="badge badge--sore">Sesi Sore</span>
                <h3>Latihan Sesi Sore</h3>
                <p class="time-info">16.30 - 18.00 WIB</p>
                <p>Fokus pada teknik dasar, footwork, dan pengondisian fisik. Sangat cocok untuk pelajar dan pemula.</p>
                <a href="katalog.php?jadwal=Sore" class="card-link">Detail Kelas Sore &rarr;</a>
            </article>

            <article class="card card--highlight">
                <span class="badge badge--malam">Sesi Malam</span>
                <h3>Latihan Sesi Malam</h3>
                <p class="time-info">19.30 - 21.00 WIB</p>
                <p>Fokus pada pad work intensif, kombinasi power punch, serta simulasi sparring. Cocok untuk pekerja dan atlet prestasi.</p>
                <a href="katalog.php?jadwal=Malam" class="card-link">Detail Kelas Malam &rarr;</a>
            </article>
        </div>
     </section>
    
    <!-- Rincian Biaya Membership vs Per Sesi -->
    <section class="section section--alt" id="biaya">
        <div class="container">
            <div class="section-title">
                <h2>Skema Biaya Latihan</h2>
            </div>
            <div class="grid grid--2">
                <div class="card price-card">
                    <h3>Membership Bulanan</h3>
                        <p class="price">Rp 150.000 <span>/ bulan</span></p>
                        <p class="price-note">+ Biaya Pendaftara Awal: Rp 50.000 (Bulan Pertama)</p>
                        <ul class="price-features">
                            <li>Bebas ikuti latihan sore & malam (Minggu, Selasa, Jum'at)</li>
                            <li>Pendampingan pelatih berlisensi Pertina</li>
                            <li>Bebas menggunakan fasilitas samsak & ring latihan</li>
                        </ul>
                </div>

                <div class="card price-card">
                    <h3>Per Sesi Latihan</h3>
                    <p class="price">Rp 20.000 <span>/ sesi</span></p>
                    <p class="price-note">Tanpa biaya pendaftaran awal</p>
                    <ul class="price-features">
                        <li>Cocok untuk yang mencoba/latihan fleksibel</li>
                        <li>Mendapatkan bimbingan materi latihan harian</li>
                        <li>Bebas akses peralatan dasar camp</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<!-- Section Lokasi & Form Kontak -->
 <section class="sction section--alt" id="kontak">
    <div class="container">
        <div class="section-title">
            <h2>Lokasi & Pendaftaran</h2>
            <p><?=  e($lokasiCamp) ?></p>
        </div>
        <div class="grid grid--2">
            <div class="card">
                <h3>Kontak Resmi</h3>
                <p class="contact-number"><strong>WhatsApp: <?=  e($kontakPelatih) ?></strong></p>
                <p class="instagram-username"><strong>Instagram: </strong><?=  e($instagramCamp) ?></p>
                <p><strong>Alamat:</strong> Dusun 1, Langenharjo, Kec. Grogol, Kab. Sukoharjo, Jawa Tengah.</p>
            </div>

            <div class="card">
                <h3>Formulir Pesan /Pertanyaan</h3>
                <form action="#" method="post" class="form">
                   <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" required placeholder="Masukkan nama kamu">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor WhatsApp:</label>
                        <input type="text" id="no_hp" name="no_hp" required placeholder="08xxxxxxxxxxx">
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pilihan Sesi Latihan:</label>
                        <textarea id="pesan" name="pesan" rows="3" required placeholder="Tanyakan seputan pendaftaran..."></textarea>
                    </div>
                    <button type="submit" class="btn-primary btn-block">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>
</section></main>

<footer class="footer">
    <div class="container">
        <p>&copy; <?=  date("Y") ?> <?=  e($namaCamp) ?>. Proyek Pemrograman Web Dinamis.</p>
    </div>
</footer>
</body></html>
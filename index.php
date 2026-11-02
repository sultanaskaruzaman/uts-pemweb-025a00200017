<?php
declare(strict_types=1);

require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title><?=  e($namaCamp) ?></title>
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
                <a href="katalog.php">Katalog Sesi</a>
                <a href="#kontak" class="btn-primary">Join Now</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <video autoplay loop muted playsinline class="hero__video">
                <source src="assets/Hero.mp4" type="video/mp4">
                Browser kamu tidak mendukung video background.
            </video>

            <div class="hero__overlay"></div>

            <div class="container hero__content">
                <span class="tagline">Pusat Latihan Tinju Sukoharjo</span><br>
                <span class="tagline">Membina mental & disiplin</span><br>
                <span class="tagline">Dari nol sampai jadi juara</span>
                <h1>Ksatria Di Dalam Dan Di Luar Ring</h1>
                <div class="hero__buttons">
                    <a href="katalog.php" class="btn-primary">Jadwal Latihan</a>
                    <a href="#biaya" class="btn-secondary">Membership</a>
                </div>
            </div>
        </section>
        <!-- Kartu Pilihan Kelas Latihan (Sore / Malam) -->
        <section class="section container" id="kelas">
            <div class="section-title">
                <h2>Jadwal Latihan</h2>
            </div>
            <div class="grid grid--2">
                <?php foreach ($jamLatihan as $jadwal): ?>
                <article class="card card--highlight">
                    <span class="badge badge--<?= strtolower($jadwal['jadwal']) ?>">Sesi <?= $jadwal['jadwal'] ?></span>
                    <h3><?= $jadwal['kategori'] ?></h3>
                    <p class="time-info"><?= $jadwal['jam'] ?> WIB</p>
                    <p><?= $jadwal['hari'] ?></p>
                    <p><?= $jadwal['fokus'] ?></p>
                    <a href="katalog.php?jadwal=<?= $jadwal['jadwal'] ?>" class="card-link">Detail Kelas <?= $jadwal['jadwal'] ?> &rarr;</a>
                </article>
                <?php endforeach; ?>
            </div>
        </section>
        <!-- Biaya Membership & Per Sesi -->
        <section class="section section--alt" id="biaya">
            <div class="container">
                <div class="section-title">
                    <h2>Skema Membership</h2>
                </div>
                <div class="grid grid--2">
                    <?php foreach ($paketLatihan as $paket): ?>
                    <div class="card price-card">
                        <h3><?= $paket['nama'] ?></h3>
                        <p class="price">Rp <?= number_format($paket['biaya'], 0, ',', '.') ?> <span><?= $paket['satuan'] ?></span></p>
                        <p class="price-note"><?= $paket['biaya_awal'] ?></p>
                        <ul class="price-features">
                            <?php foreach ($paket['fitur'] as $fitur): ?>
                                <li><?= $fitur ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Section Lokasi & Form Kontak -->
        <section class="sction section--alt" id="kontak">
            <div class="container">
                <div class="section-title">
                    <h2>Lokasi & Pendaftaran</h2>
                </div>
                <div class="grid grid--2">
                    <div class="card">
                        <h3>Kontak Resmi</h3>
                        <table>
                            <tr>
                                <td><strong>WhatsApp:</strong></td>
                                <td><?=  e($kontakPelatih) ?></td>
                            </tr>
                            <tr>
                                <td><strong>Instagram:</strong></td>
                                <td><?=  e($instagramCamp) ?></td>
                            </tr>
                            <tr>
                                <td><strong>Alamat:</strong></td>
                                <td><?=  e($lokasiCamp) ?></td>
                            </tr>
                        </table>
                    </div>

                    <div class="card">
                        <h3>Formulir Pesan / Pertanyaan</h3>
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
                                <textarea id="pesan" name="pesan" rows="3" required placeholder="Tanyakan seputar pendaftaran..."></textarea>
                            </div>
                            <button type="submit" class="btn-primary btn-block">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?=  date("Y") ?> <?=  e($namaCamp) ?>. Proyek Pemrograman Web Dinamis.</p>
        </div>
    </footer>
</body>
</html>
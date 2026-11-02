<?php
declare(strict_types=1);

require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";

// Daftar Pilihan Filter Jadwal
$pilihanFilter = ["Semua", "Sore", "Malam"];

// Membaca Parameter URL dengan Operator null coolescing (??)
$jadwalDipilih = $_GET["jadwal"] ?? "Semua";
if (!in_array($jadwalDipilih, $pilihanFilter, true)) {
    $jadwalDipilih = "Semua"; // Keamanan filter URL
}

// Memproses Data Berdasarkan Filter
$jadwalTampil = filterJadwal($daftarJadwal, $jadwalDipilih);

// Menghitung Ringkasan Data (Fungsi Array & Hitungan Dinamsi)
$totalSesi = count($daftarJadwal);
$sesiSore = hitungJumlahSesi($daftarJadwal, "Sore");
$sesiMalam = hitungJumlahSesi($daftarJadwal, "Malam");
$totalKuota = hitungTotalKuota($daftarJadwal);
?>

<DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Katalog Jadwal Latihan - <?=  e($namaCamp) ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="navbar">
        <div class="container navbar_inner">
        <a href="index.php" class="brand">
            <img src="assets/logo.jpeg" alt="Logo Pertina" class="brand__logo" width="42" height="42">
            <span><?=  e($namaCamp) ?></span>
        </a>
            <nav class="nav-menu">
                <a href="index.php">Profil</a>
                <a href="katalog.php" class="active">Katalog Sesi</a>
                <a href="index.php#kontak" class="btn-primary">Join Now</a>
            </nav>
        </div>
    </header>

    <main class="container section">
        <div class="section-title">
            <h1>Katalog Sesi Latihan</h1>
        </div>

        <!-- Banner Ringkasan Hasil Hitung (Diolah Dinamis dari Array) -->
         <section class="summary-bar grid grid--4">
            <div class="summary-card">
                <h4>Total Sesi Terdaftar</h4>
                <p class="summary-number"><?=  $totalSesi ?> Sesi</p>
            </div>
            <div class="summary-card">
                <h4>Total Sesi Sore</h4>
                <p class="summary-number"><?=  $sesiSore ?> Kelas</p>
            </div>
            <div class="summary-card">
                <h4>Total Sesi Malam</h4>
                <p class="summary-number"><?=  $sesiMalam ?> Kelas</p>
            </div>
            <div class="summary-card">
                <h4>Total Kuota Available</h4>
                <p class="summary-number"><?= $totalKuota ?> Orang</p>
            </div>
         </section>

         <!-- Tombol Filter Interaktif Inter-Halaman -->
          <div class="filter-container">
            <?php foreach ($pilihanFilter as $f): ?>
                <a href="katalog.php?jadwal=<?=  urlencode($f) ?>"
                class="btn-filter <?=  $f === $jadwalDipilih ? 'btn-filter--active' : '' ?>">
                <?=  e($f) ?>
                </a>
            <?php endforeach ?>
          </div>

          <!-- Render Kartu Sesi Latihan Menggunakan Loop foreach -->
           <div class="grid grid--3">
            <?php if (count($jadwalTampil) === 0): ?>
                <p class="no-data">tidak ada sesi latihan yang cocok dengan filter yang dipilih.</p>
                <?php endif; ?>

                <?php foreach ($jadwalTampil as $item): ?>
                    <?php
                    $status = statusKuota($item["kuota"]);
                    $classBadgeStatus = badgeStatusKuota($status);
                    $classBadgeJadwal = badgeJadwal($item["jadwal"]);
                    ?>
                    <article class="card card--schedule">
                        <div class="card__header">
                            <span class="<?= $classBadgeJadwal ?>"><?=  e($item["jadwal"]) ?></span>
                            <span class="<?= $classBadgeStatus ?>"><?=  e($status) ?></span>
                        </div>
                        <h3><?=  e($item["nama_kelas"]) ?></h3>
                        <p class="code-info">Kode: <strong><?=  e($item["kode"]) ?></strong> | Kategori: <strong><?=  e($item["kategori"]) ?></strong></p>
                        <div class="schedule-details">
                            <p><strong>Hari: <?=  e($item["hari"]) ?></strong></p>
                            <p><strong>Non-Member:</strong> <?=  formatRupiah($item["biaya"]) ?> / sesi</p>
                            <p><strong>Sisa Kuota:</strong> <?=  $item["kuota"] ?> tempat</p>
                        </div>
                    </article>
                <?php endforeach ?>
           </div>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?=  date("Y") ?> <?=  e($namaCamp) ?>. Proyek Pemrograman Web Dinamis.</p>
        </div>
    </footer>

</body>
</html>
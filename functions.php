<?php
declare(strict_types=1);

/**
 * * Fungsi Pembungkus Keamanan XSS
 */
function e(string $teks): string {
    return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8');
}

/**
 * * Format Angka ke rupiah
 */
function formatRupiah(float $angka): string {
    return "Rp " . number_format($angka, 0, ',', '.') . '';
}

/**
 * * FMenentukan Status Kuota Latihan Menggunakan Percabangan match(true
 */
function statusKuota(int $kuota): string {
    return match(true) {
        $kuota === 0 => "Penuh",
        $kuota <= 5 => "Sisa Sedikit",
        default => "Tersedia",
    };
}

/**
 * * Menentukan Nama Kelas Badge CSS Berdasarkan Statur Kuota
 */
function badgeStatusKuota(string $status): string {
    return match($status) {
        "Penuh" => "badge badge--penuh",
        "Sisa Sedikit" => "badge badge--peringatan",
        "Tersedia" => "badge badge--tersedia",
    };
}

/**
 * * Menentukan Nama Kelas Badge CSS Berdasarkan Waktu Jadwal
 */
function badgeJadwal(string $waktu): string {
    return match($waktu) {
        "Sore" => "badge badge--sore",
        "Malam" => "badge badge--malam",
        default => "badge badge--default",
    };
}

/**
 * * Memfilter Daftar Jadwal Berdasarkan Pilihan URL
 */
function filterJadwal(array $data, string $pilihanJadwal): array {
    if ($pilihanJadwal === "Semua") {
        return $data;
    }
    return array_filter($data, fn(array $item): bool => $item['jadwal'] === $pilihanJadwal);
}

/**
 * * Menghitung Total Kuota yang Masih Tersedia (Fungsi Array: array_column & array_sum)
 */
function hitungTotalKuota(array $data): int {
    return array_sum(array_column($data, "kuota"));
}

/**
 * * Menghitung Jumlah Sesi Berdasarkan Jenis Jadwal (Fungsi Array: array_filter & count)
 */
function hitungJumlahSesi(array $data, string $jadwal): int {
    $filtered = array_filter($data, fn(array $item): bool => $item['jadwal'] === $jadwal);
    return count($filtered);
}
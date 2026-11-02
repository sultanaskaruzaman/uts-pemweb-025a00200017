<?php
declare(strict_types=1);

//identitas dam informasi Camp
$namaCamp = "PERTINA SUKOHARJO";
$lokasiCamp = "Dusun 1, Langenharjo, Kec. Grogol, Kab. Sukoharjo";
$kontakPelatih = "0882-2509-8117 (Coach Krisna)";
$instagramCamp = "@pertina.sukoharjoo";

//Array Jadwal Latiham
$jamLatihan = [
    [
        "jadwal" => "Sore",
        "kategori" => "Student / Beginner",
        "jam" => "16.30 - 18.00",
        "hari" => "Selasa, Jum'at & Minggu",
        "fokus" => "Teknik dasar | Footwork | Conditioning"
    ],
    [
        "jadwal" => "Malam",
        "kategori" => "Worker / Athlete",
        "jam" => "19.30 - 21.00",
        "hari" => "Selasa, Jum'at & Minggu",
        "fokus" => "Pad work | Kombinasi | Sparring"
    ]
];

//Array Skema Membership
$paketLatihan = [
    [
        "nama" => "Membership Bulanan",
        "biaya" => 150000,
        "satuan" => "/ bulan",
        "biaya_awal" => "+ Biaya Pendaftaran Awal: Rp 50.000",
        "fitur" => [
            "Bebas ikuti latihan semua sesi",
            "Pendampingan pelatih berlisensi Pertina",
            "Bebas akses fasilitas samsak & ring"
        ]
    ],
    [
        "nama" => "Per Sesi Latihan",
        "biaya" => 20000,
        "satuan" => "/ sesi",
        "biaya_awal" => "Tanpa biaya pendaftaran awal",
        "fitur" => [
            "Cocok untuk yang mencoba/latihan fleksibel",
            "Bimbingan materi latihan harian",
            "Bebas akses peralatan dasar camp"
        ]
    ]
];

//Array Multidimensi Utama: Minimal 8 Item & Atribut Lengkap
$daftarJadwal = [
    [
        "kode" => "BOX-01",
        "nama_kelas" => "Basic Boxing & Footwork Drill",
        "kategori" => "Pemula",
        "jadwal" => "Sore",
        "hari" => "Selasa & Jum'at",
        "biaya"=> 20000,
        "kuota" => 12
    ],
    [
        "kode" => "BOX-02",
        "nama_kelas" => "Pad Work & Combination Punch",
        "kategori" => "Menengah",
        "jadwal" => "Sore",
        "hari" => "Minggu",
        "biaya"=> 20000,
        "kuota" => 8
    ],
    [
        "kode" => "BOX-03",
        "nama_kelas" => "Physical Conditioning & Heavy Bag",
        "kategori" => "Menengah",
        "jadwal" => "Sore",
        "hari" => "Selasa & Jum'at",
        "biaya"=> 20000,
        "kuota" => 0
    ],
    [
        "kode" => "BOX-04",
        "nama_kelas" => "Youth & Junior Fighter Class",
        "kategori" => "Pemula",
        "jadwal" => "Sore",
        "hari" => "Minggu",
        "biaya"=> 20000,
        "kuota" => 15
    ],
    [
        "kode" => "BOX-05",
        "nama_kelas" => "Power Punching & Head Movement",
        "kategori" => "Lanjutan",
        "jadwal" => "Malam",
        "hari" => "Selasa & Jum'at",
        "biaya"=> 20000,
        "kuota" => 10
    ],
    [
        "kode" => "BOX-06",
        "nama_kelas" => "Controlled Technical Sparring",
        "kategori" => "Lanjutan",
        "jadwal" => "Malam",
        "hari" => "Jum'at",
        "biaya"=> 20000,
        "kuota" => 4
    ],
    [
        "kode" => "BOX-07",
        "nama_kelas" => "Endurance & Circuit Drill",
        "kategori" => "Lanjutan",
        "jadwal" => "Malam",
        "hari" => "Selasa & Minggu",
        "biaya"=> 20000,
        "kuota" => 0
    ],
    [
        "kode" => "BOX-08",
        "nama_kelas" => "Atlet Comptition Preparation",
        "kategori" => "Prestasi",
        "jadwal" => "Malam",
        "hari" => "Selasa, Jum'at, Minggu",
        "biaya"=> 20000,
        "kuota" => 5
    ]
];
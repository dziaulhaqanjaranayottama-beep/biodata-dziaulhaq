<?php
date_default_timezone_set("Asia/semarang");

/* =========================
   VARIABEL BIODATA
========================= */
$nama_lengkap = "Dziaulhaq Anjara Nayottama";
$nama_panggilan = "Ulhaq";
$agama = "Islam";
$tempat_lahir = "Semarang";
$tanggal_lahir = 01;
$bulan_lahir = "10";
$tahun_lahir = 2009;
$alamat = "Jl. Rorojonggrang Tmr XIII,39 Rt02,Rw06 Manyaran,Semarang Barat";
$gender = "Laki-laki";
$kewarganegaraan = "Indonesia";
$no_wa = "081225204811";
$email = "ulhaqanjara63@gmail.com@gmail.com";
$motto_hidup = "Jangan pernah menyerah, karena sukses butuh proses!";

$hobi = [
    "Menonton film",
    "Main game",
    "Olahraga",
    
];

$skills = [
    "HTML" => 65,
    "CSS" => 50,
    "JavaScript" => 50,
    "PHP" => 50,
    "Public Speaking" => 25
];

$makanan_favorit = [
    "Nasi Goreng",
    "Ayam Geprek",
    "Mie Ayam"
];

$minuman_favorit = [
    "Air putih",
    "Jus Alpukat",
    "Kopi",
    "Susu"
];

$riwayat_pendidikan = [
    ["tingkat" => "SD", "sekolah" => "SDN Sampangan 02", "mulai" => "2016", "lulus" => "2022"],
    ["tingkat" => "SMP", "sekolah" => "SMPI Al Madina", "mulai" => "2022", "lulus" => "2025"],
    ["tingkat" => "SMK", "sekolah" => "SMKN 08 Semarang", "mulai" => "2025", "lulus" => "2028"]
];

$foto = "foto.jpg"; // taruh foto kamu satu folder dengan file ini

/* =========================
   PERHITUNGAN UMUR
========================= */
$tahun_sekarang = date("Y");
$umur = $tahun_sekarang - $tahun_lahir;

/* =========================
   KEINGINAN 10 TAHUN LAGI
========================= */
$tahun_10_lagi = $tahun_sekarang + 10;
$umur_10_lagi = $umur + 10;

$keinginan_10_tahun_lagi = "Hai namaku $nama_panggilan, saat ini tahun $tahun_sekarang, aku adalah seorang pelajar yang berumur $umur tahun. 
10 tahun lagi di tahun $tahun_10_lagi, di umur $umur_10_lagi aku adalah seorang profesional yang sukses di bidang pertambangan. 
Aku ingin menjadi orang yang membanggakan orang tua dan mencapai cita-cita. 
Rencana yang akan aku tempuh adalah belajar dengan giat, memperbanyak pengalaman, dan terus meningkatkan skill.";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata - <?php echo $nama_lengkap; ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

<header>
    <i class="fa-solid fa-id-card"></i> BIODATA SISWA
</header>

<div class="container">

    <div class="top-section">
        <div class="photo">
            <img src="<?php echo $foto; ?>" alt="foto.jpeg">
            <p class="badge"><i class="fa-solid fa-user"></i> <?php echo $nama_panggilan; ?></p>
        </div>

        <div class="info">
            <h2><?php echo $nama_lengkap; ?></h2>
            <p><i class="fa-solid fa-location-dot"></i> <?php echo "$tempat_lahir, $tanggal_lahir $bulan_lahir $tahun_lahir"; ?></p>
            <p><i class="fa-solid fa-calendar"></i> Umur: <?php echo $umur; ?> tahun</p>
            <p><i class="fa-solid fa-house"></i> Alamat: <?php echo $alamat; ?></p>
            <p><i class="fa-solid fa-venus-mars"></i> Gender: <?php echo $gender; ?></p>
            <p><i class="fa-solid fa-flag"></i> Kewarganegaraan: <?php echo $kewarganegaraan; ?></p>
            <p><i class="fa-solid fa-mosque"></i> Agama: <?php echo $agama; ?></p>
            <p><i class="fa-brands fa-whatsapp"></i> WhatsApp: <?php echo $no_wa; ?></p>
            <p><i class="fa-solid fa-envelope"></i> Email: <?php echo $email; ?></p>
        </div>
    </div>

    <div class="section">
        <h3><i class="fa-solid fa-star"></i> Keinginan 10 Tahun Lagi</h3>
        <p><?php echo $keinginan_10_tahun_lagi; ?></p>
    </div>

    <div class="section">
        <h3><i class="fa-solid fa-heart"></i> Hobi (List 123)</h3>
        <ol>
            <?php foreach ($hobi as $hb): ?>
                <li><?php echo $hb; ?></li>
            <?php endforeach; ?>
        </ol>
    </div>

    <div class="section">
        <h3><i class="fa-solid fa-code"></i> Skills (Range)</h3>
        <?php foreach ($skills as $nama_skill => $nilai): ?>
            <div class="skill">
                <label><?php echo $nama_skill; ?> - <?php echo $nilai; ?>%</label>
                <div class="progress">
                    <div class="progress-bar" data-skill="<?php echo $nilai; ?>"></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="section">
        <h3><i class="fa-solid fa-bowl-food"></i> Makanan Favorit (Persegi)</h3>
        <ul>
            <?php foreach ($makanan_favorit as $mkn): ?>
                <li><?php echo $mkn; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="section">
        <h3><i class="fa-solid fa-mug-hot"></i> Minuman Favorit (ABC)</h3>
        <ol class="minuman">
            <?php foreach ($minuman_favorit as $mnm): ?>
                <li><?php echo $mnm; ?></li>
            <?php endforeach; ?>
        </ol>
    </div>

    <div class="section">
        <h3><i class="fa-solid fa-school"></i> Riwayat Pendidikan</h3>
        <table>
            <tr>
                <th>Tingkat</th>
                <th>Nama Sekolah</th>
                <th>Tahun Mulai</th>
                <th>Tahun Lulus</th>
            </tr>
            <?php foreach ($riwayat_pendidikan as $pnd): ?>
                <tr>
                    <td><?php echo $pnd["tingkat"]; ?></td>
                    <td><?php echo $pnd["sekolah"]; ?></td>
                    <td><?php echo $pnd["mulai"]; ?></td>
                    <td><?php echo $pnd["lulus"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <div class="motto-container">
        <div class="motto-text">
            <i class="fa-solid fa-quote-left"></i>
            <?php echo $motto_hidup; ?>
            <i class="fa-solid fa-quote-right"></i>
        </div>
    </div>

    <a href="jadwal.php" class="link-btn">
        <i class="fa-solid fa-calendar-days"></i> Lihat Jadwal Pelajaran & Piket
    </a>

</div>

<footer>
    &copy; <?php echo date("Y"); ?> - Biodata <?php echo $nama_panggilan; ?>
</footer>

<!-- JS -->
<script src="script.js"></script>

</body>

</html>

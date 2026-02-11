<?php
$nama_kamu = "Nama Kamu"; // GANTI INI SESUAI NAMA KAMU BIAR DI HIGHLIGHT

$jadwal_piket = [
    "Senin" => ["Ahmad", "Chayu", "Ulhaq", "Kynan", "Zaidan", "Alif", "Vania", "Dova"],
    "Selasa" => ["Anandira", "Chessa", "Finza", "Tegar", "Rania", "Vanessa", "Erel"],
    "Rabu" => ["Anggita", "Dimas", "Furan", "Moharani", "Silvia", "Tiara", "Athala"],
    "Kamis" => ["Aurelia", "Darus", "Galuh", "Aini", "Aisyah", "M. Zidan", "Dzaky"],
    "Jumat" => ["Zahran", "Azzahro", "Nnyko", "Destia", "Keisha", "Archuleta", "Khayra"]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Piket</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

<header>
    <i class="fa-solid fa-broom"></i> JADWAL PIKET KELAS
</header>

<div class="container">

    <div class="section">
        <h3><i class="fa-solid fa-calendar-days"></i> Jadwal Piket Senin - Jumat</h3>

        <table>
            <tr>
                <th>Hari</th>
                <th>Petugas Piket</th>
            </tr>

            <?php foreach ($jadwal_piket as $hari => $petugas): ?>
                <tr>
                    <td><b><?php echo $hari; ?></b></td>
                    <td style="text-align:left;">
                        <?php foreach ($petugas as $index => $nama): ?>

                            <?php if (strtolower($nama) == strtolower($nama_kamu)): ?>
                                <span class="highlight">
                                    <i class="fa-solid fa-star"></i> <?php echo $nama; ?>
                                </span>
                            <?php else: ?>
                                <span>
                                    <i class="fa-solid fa-user"></i> <?php echo $nama; ?>
                                </span>
                            <?php endif; ?>

                            <?php
                            if ($index < count($petugas) - 1) {
                                echo " | ";
                            }
                            ?>

                        <?php endforeach; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>

    <div style="text-align:center;">
        <a href="jadwal.php" class="link-btn">
            <i class="fa-solid fa-book"></i> Jadwal Pelajaran
        </a>

        <a href="biodata.php" class="link-btn">
            <i class="fa-solid fa-id-card"></i> Biodata
        </a>
    </div>

</div>

<footer>
    &copy; <?php echo date("Y"); ?> - Jadwal Piket Kelas
</footer>

</body>
</html>
<?php
// Jadwal Pelajaran X PPLG 3 (Jam 1 - 10)
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Pelajaran</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        .jadwal-title {
            text-align: center;
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 20px;
            letter-spacing: 2px;
        }

        .jadwal-table th,
        .jadwal-table td {
            font-size: 14px;
            font-weight: bold;
        }

        .hari {
            width: 120px;
            font-size: 16px;
            background: rgba(0,0,0,0.3);
        }

        .mapel {
            background: rgba(255,255,255,0.08);
            font-size: 16px;
        }

        .mapel:hover {
            background: rgba(0,198,255,0.25);
            transition: 0.3s;
        }
    </style>
</head>

<body>

<header>
    <i class="fa-solid fa-calendar-days"></i> JADWAL PELAJARAN
</header>

<div class="container">

    <div class="jadwal-title">X PPLG 3</div>

    <div class="section">
        <h3><i class="fa-solid fa-table"></i> Jadwal Pelajaran Senin - Jumat</h3>

        <table class="jadwal-table">
            <tr>
                <th class="hari">HARI</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
            </tr>

            <!-- SENIN -->
            <tr>
                <td class="hari">SENIN</td>
                <td class="mapel" colspan="3">POR</td>
                <td class="mapel" colspan="2">BNG</td>
                <td class="mapel" colspan="2">BJW</td>
                <td class="mapel" colspan="3">PABP</td>
            </tr>

            <!-- SELASA -->
            <tr>
                <td class="hari">SELASA</td>
                <td class="mapel" colspan="2">INF</td>
                <td class="mapel" colspan="2">KKA</td>
                <td class="mapel" colspan="4">PGD</td>
                <td class="mapel" colspan="2">IPAS</td>
            </tr>

            <!-- RABU -->
            <tr>
                <td class="hari">RABU</td>
                <td class="mapel" colspan="2">PPS</td>
                <td class="mapel" colspan="2">BNG</td>
                <td class="mapel" colspan="2">BIN</td>
                <td class="mapel" colspan="2">MTK</td>
                <td class="mapel" colspan="2">SNM</td>
            </tr>

            <!-- KAMIS -->
            <tr>
                <td class="hari">KAMIS</td>
                <td class="mapel" colspan="4">PGD</td>
                <td class="mapel" colspan="4">GIM</td>
                <td class="mapel" colspan="2">IPAS</td>
            </tr>

            <!-- JUMAT -->
            <tr>
                <td class="hari">JUMAT</td>
                <td class="mapel" colspan="2">BIN</td>
                <td class="mapel" colspan="2">SJR</td>
                <td class="mapel" colspan="2">MTK</td>
                <td class="mapel" colspan="4">IPAS</td>
            </tr>

        </table>
    </div>

    <div style="text-align:center;">
        <a href="piket.php" class="link-btn">
            <i class="fa-solid fa-broom"></i> Lihat Jadwal Piket
        </a>

        <a href="biodata.php" class="link-btn">
            <i class="fa-solid fa-id-card"></i> Kembali ke Biodata
        </a>
    </div>

</div>

<footer>
    &copy; <?php echo date("Y"); ?> - Jadwal Pelajaran X PPLG 3
</footer>

</body>
</html>
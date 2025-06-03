<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="view/core.css">
    <link rel="stylesheet" href="view/login.css">
</head>
<body>
<div class="container">
    <h2>Pendaftaran Anggota Ekstra</h2>
    <form method="POST" action="action/proses.php">
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" required>

        <label for="email">Email Aktif</label>
        <input type="text" name="email" id="email" required>

        <label for="umur">Umur</label>
        <input type="number" name="umur" id="umur" required>

        <label for="minat">Minat</label>
        <select name="minat" id="minat">
            <?php
                include 'config.php';
                $result2 = mysqli_query($conn, "SELECT * FROM ekstra");
                $no = 1;
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    echo "<option value='{$no}'>{$row2['nama_ekstra']}</option>";
                    $no++;
                }
            ?>
        </select>

        <button type="submit" name="submit">Daftar Sekarang</button>
    </form>
    <div class="info">
        <a href="index.php?p=data">Lihat Daftar Anggota</a>
    </div>
</div>
</body>
</html>

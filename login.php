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
    <h2>Login Admin</h2>
    <form method="POST" action="action/proses_admin.php">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required>

        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" required>

        <button type="submit" name="submit">Login</button>
    </form>
</div>
</body>
</html>

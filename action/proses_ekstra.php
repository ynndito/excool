<?php
include '../config.php';

$nama_ekstra = $_POST['nama_ekstra'];

mysqli_query($conn, "INSERT INTO ekstra (nama_ekstra) VALUES ('$nama_ekstra')");

// Optional: redirect back nya~
header("Location: ../index.php?p=ekstra");
?>

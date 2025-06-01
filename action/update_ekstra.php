<?php
include '../config.php';

$id_ekstra = $_POST['id_ekstra'];
$nama_ekstra = $_POST['nama_ekstra'];

// Use prepared statement for safety, but here's a simple example:
mysqli_query($conn, "UPDATE ekstra SET nama_ekstra = '$nama_ekstra' WHERE id_ekstra = $id_ekstra");

// Optional: redirect back nya~
header("Location: ../index.php?p=ekstra");
exit();
?>


<?php
include '../config.php';

$id_ekstra = $_POST['id_ekstra'];

// Use prepared statement for safety, but here's a simple example:
mysqli_query($conn, "DELETE FROM ekstra WHERE `ekstra`.`id_ekstra` = $id_ekstra");

// Optional: redirect back nya~
header("Location: ../index.php?p=ekstra");
exit();
?>


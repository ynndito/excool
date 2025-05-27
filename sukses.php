<?php
session_start();
echo "<h2>Info:</h2>";
if (isset($_SESSION['pesan'])) {
    echo "<p>" . $_SESSION['pesan'] . "</p>";
    unset($_SESSION['pesan']);
}
echo '<a href="index.php">Kembali ke form</a> | <a href="data.php">Lihat Data</a>';
?>

<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM anggota");
echo "<h2>Daftar Anggota</h2>";
echo "<table border='1'><tr><th>No</th><th>Nama</th><th>Email</th><th>Umur</th><th>Minat</th></tr>";
$no = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$no}</td>
            <td>{$row['nama']}</td>
            <td>{$row['email']}</td>
            <td>{$row['umur']}</td>
            <td>{$row['minat']}</td>
         </tr>";
    $no++;
}
echo "</table>";
?>

<?php
include '../config.php';

$filter_ekstra = isset($_GET['ekstra']) ? $_GET['ekstra'] : '';
$filter_tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : '';

$where = [];
if ($filter_ekstra != '') $where[] = "id_ekstra = '$filter_ekstra'";
if ($filter_tanggal != '') $where[] = "tanggal_absen = '$filter_tanggal'";
$whereSQL = count($where) ? 'WHERE ' . implode(' AND ', $where) : '';

$result = mysqli_query($conn, "SELECT * FROM absen $whereSQL");

if (mysqli_num_rows($result) > 0) {
  echo '<table border="1">
          <thead>
            <tr>
              <th>No</th>
              <th>Anggota</th>
              <th>Ekstra</th>
              <th>Tanggal</th>
            </tr>
          </thead>
          <tbody>';
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id_absen']}</td>
            <td>{$row['id_anggota']}</td>
            <td>{$row['id_ekstra']}</td>
            <td>{$row['tanggal_absen']}</td>
          </tr>";
  }
  echo '</tbody></table>';
} else {
  echo '<p>Tidak ada data</p>';
}
?>


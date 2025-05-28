<h2>Daftar Anggota</h2>
<a class="btn" data-bs-toggle="collapse" href="#filter" role="button" aria-expanded="false" aria-controls="filter">
    Filter v
</a>
<div class="collapse kf-filter" id="filter">
<?php
  include 'config.php';

  $result = mysqli_query($conn, "SELECT nama_ekstra FROM ekstra");
  $no2 = 1;
  while ($row = mysqli_fetch_assoc($result)) {
      echo "<a href=\"index.php?p=data&filter={$row['nama_ekstra']}\">{$row['nama_ekstra']}</a>";
      $no2++;
  }
?>
</div>
<?php
if (isset($_GET['filter']) && $_GET['filter'] !== ''){
?>
<h4>Filter By: <?= isset($_GET['filter']) ?></h4>
<table>
  <thead>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Umur</th>
    <th>Minat</th>
  </thead>
  <?php
      $get = $_GET['filter'];
      $result2 = mysqli_query($conn, "SELECT anggota.*, ekstra.nama_ekstra AS minat
        FROM anggota
        JOIN ekstra ON anggota.id_ekstra = ekstra.id_ekstra
        WHERE ekstra.nama_ekstra = '$get'
        ORDER BY minat ASC;
        ");
      $no = 1;
      while ($row2 = mysqli_fetch_assoc($result2)) {
          echo "<tbody>
                  <td>{$no}</td>
                  <td>{$row2['nama']}</td>
                  <td>{$row2['email']}</td>
                  <td>{$row2['umur']}</td>
                  <td>{$row2['minat']}</td>
              </tbody>";
          $no++;
      }
    }
  ?>
</table>

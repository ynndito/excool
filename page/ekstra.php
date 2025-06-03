<h2>Daftar Ekstrakulikuler</h2>
<button clas="btn" onclick="document.getElementById('tambahEkstra').showModal()">Tambah Data</button>
<div class="kf-overflowed">
<table>
  <thead>
    <th>No</th>
    <th>Nama Ekstra</th>
    <th>Aksi</th>
  </thead>
  <?php
    include 'config.php';
    $result2 = mysqli_query($conn, "SELECT * FROM ekstra");
    $no = 1;
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo "<tbody>
                <td>{$no}</td>
                <td>{$row2['nama_ekstra']}</td>
                <td>
                  <a
                    class='btn kf-btn-blue'
                    onclick=\"openEditDialog('{$row2['id_ekstra']}', '" . htmlspecialchars($row2['nama_ekstra'], ENT_QUOTES) . "')\">Edit</a>
                  <a 
                    class='btn kf-btn-red'
                    onclick=\"openDeleteDialog('{$row2['id_ekstra']}', '" . htmlspecialchars($row2['nama_ekstra'], ENT_QUOTES) . "')\">Delete</a>
                </td>
            </tbody>";
        $no++;
    }
  ?>
</table>
</div>

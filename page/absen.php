<?php
include 'config.php'; // Connect to DB

// Fetch list of ekstra for the dropdown
$ekstraList = mysqli_query($conn, "SELECT * FROM ekstra");

// Handle filters
$filter_ekstra = isset($_GET['ekstra']) ? $_GET['ekstra'] : '';
$filter_tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : '';

// Build query dynamically
$query = "SELECT * FROM absen";
$conditions = [];

if (!empty($filter_ekstra)) {
  $conditions[] = "id_ekstra = " . intval($filter_ekstra);
}
if (!empty($filter_tanggal)) {
  $conditions[] = "tanggal_absen = '" . mysqli_real_escape_string($conn, $filter_tanggal) . "'";
}

if (!empty($conditions)) {
  $query .= " WHERE " . implode(" AND ", $conditions);
}

$result = mysqli_query($conn, $query);
?>

<h2>Data Absen</h2>
<form action="index.php" method="get">
  <input type="hidden" name="p" value="absen"> <!-- this makes ?p=absen appear in the URL -->
  
  <select id="ekstra" name="ekstra">
    <option value="">-- Semua Ekstra --</option>
    <?php while ($ekstra = mysqli_fetch_assoc($ekstraList)): ?>
      <option value="<?= $ekstra['id_ekstra'] ?>" <?= ($ekstra['id_ekstra'] == $filter_ekstra) ? 'selected' : '' ?>>
        <?= htmlspecialchars($ekstra['nama_ekstra']) ?>
      </option>
    <?php endwhile; ?>
  </select>

  <input type="date" id="tanggal" name="tanggal" value="<?= htmlspecialchars($filter_tanggal) ?>">
  <button type="submit" class="btn kf-btn-blue">Submit</button>
</form>
<div id="absen-table">
  <table border="1" >
  </table>
</div>

<script>
document.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault(); // prevent the page from reloading
  const form = e.target;
  const ekstra = form.ekstra.value;
  const tanggal = form.tanggal.value;

  const params = new URLSearchParams({
    ekstra: ekstra,
    tanggal: tanggal
  });

  fetch('action/fetch_absen.php?' + params.toString())
    .then(res => res.text())
    .then(html => {
      document.getElementById('absen-table').innerHTML = html;
    })
    .catch(err => console.error('Gagal meow:', err));
});
</script>

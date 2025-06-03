function openEditDialog(id, nama) {
  document.getElementById('edit-id-ekstra').value = id;
  document.getElementById('edit-nama-ekstra').value = nama;
  document.getElementById('editEkstra').showModal();
}

function openDeleteDialog(id, nama) {
  document.getElementById('hapus-id-ekstra').value = id;
  document.getElementById('nama-ekstra-dihapus').innerHTML = nama;
  document.getElementById('hapusEkstra').showModal();
}

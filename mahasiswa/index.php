<?php
include '../config/koneksi.php';
include '../header.php';

$data = mysqli_query($conn,"
SELECT m.*, j.nama_jurusan, k.nama_kelas
FROM mahasiswa m
JOIN jurusan j ON m.id_jurusan = j.id_jurusan
JOIN kelas k ON m.id_kelas = k.id_kelas
");
?>

<h3>Data Mahasiswa</h3>

<!-- 🔥 TOMBOL TAMBAH -->
<a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Data</a>

<div class="card">
<div class="card-body">

<table class="table table-bordered">
<tr>
<th>No</th>
<th>Nama</th>
<th>Jurusan</th>
<th>Kelas</th>
<th>Aksi</th>
</tr>

<?php $no=1; while($d=mysqli_fetch_array($data)){ ?>
<tr>
<td><?= $no++ ?></td>
<td><?= $d['nama'] ?></td>
<td><?= $d['nama_jurusan'] ?></td>
<td><?= $d['nama_kelas'] ?></td>
<td>
<a href="edit.php?id=<?= $d['id_mahasiswa'] ?>" class="btn btn-warning btn-sm">Edit</a>
<a href="hapus.php?id=<?= $d['id_mahasiswa'] ?>" class="btn btn-danger btn-sm">Hapus</a>
</td>
</tr>
<?php } ?>

</table>

</div>
</div>

<?php include '../footer.php'; ?>
<?php
include '../config/koneksi.php';

$jurusan = mysqli_query($conn,"SELECT * FROM jurusan");
$kelas = mysqli_query($conn,"SELECT * FROM kelas");

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $jurusan_id = $_POST['jurusan'];
    $kelas_id = $_POST['kelas'];

    mysqli_query($conn,"
    INSERT INTO mahasiswa (nama, id_jurusan, id_kelas)
    VALUES ('$nama','$jurusan_id','$kelas_id')
    ");

    header("Location: index.php");
}
?>

<?php include '../header.php'; ?>

<h3>Tambah Mahasiswa</h3>

<div class="card col-md-6">
<div class="card-body">

<form method="POST">

<input type="text" name="nama" class="form-control mb-2" placeholder="Nama" required>

<!-- DROPDOWN JURUSAN -->
<select name="jurusan" class="form-control mb-2" required>
<option value="">-- Pilih Jurusan --</option>
<?php while($j=mysqli_fetch_array($jurusan)){ ?>
<option value="<?= $j['id_jurusan'] ?>"><?= $j['nama_jurusan'] ?></option>
<?php } ?>
</select>

<!-- DROPDOWN KELAS -->
<select name="kelas" class="form-control mb-2" required>
<option value="">-- Pilih Kelas --</option>
<?php while($k=mysqli_fetch_array($kelas)){ ?>
<option value="<?= $k['id_kelas'] ?>"><?= $k['nama_kelas'] ?></option>
<?php } ?>
</select>

<button name="simpan" class="btn btn-success">Simpan</button>

</form>

</div>
</div>

<?php include '../footer.php'; ?>
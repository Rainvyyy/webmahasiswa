<?php
include '../config/koneksi.php';

$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'"));

if(isset($_POST['update'])){
    mysqli_query($conn,"UPDATE mahasiswa SET nama='$_POST[nama]' WHERE id_mahasiswa='$id'");
    header("Location: index.php");
}
?>

<?php include '../header.php'; ?>

<h3>Edit Mahasiswa</h3>

<form method="POST">
<input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control mb-2">
<button name="update" class="btn btn-primary">Update</button>
</form>

<?php include '../footer.php'; ?>
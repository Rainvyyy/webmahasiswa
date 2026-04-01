<?php
include 'config/koneksi.php';
include 'header.php';

if(isset($_POST['ubah'])){
    $user = $_SESSION['user'];
    $lama = $_POST['lama'];
    $baru = $_POST['baru'];

    // ambil password lama dari database
    $q = mysqli_query($conn,"SELECT * FROM user WHERE username='$user'");
    $d = mysqli_fetch_assoc($q);

    // cek password lama
    if(password_verify($lama, $d['password'])){
        $password_baru = password_hash($baru, PASSWORD_DEFAULT);

        mysqli_query($conn,"UPDATE user SET password='$password_baru' WHERE username='$user'");

        echo "<script>alert('Password berhasil diubah');</script>";
    } else {
        echo "<script>alert('Password lama salah');</script>";
    }
}
?>

<h3>Ubah Password</h3>

<div class="card col-md-5">
<div class="card-body">

<form method="POST">

<!-- PASSWORD LAMA -->
<input type="password" name="lama" class="form-control mb-2" placeholder="Password Lama" required>

<!-- PASSWORD BARU -->
<input type="password" name="baru" class="form-control mb-2" placeholder="Password Baru" required>

<button name="ubah" class="btn btn-primary w-100">Ubah Password</button>

</form>

</div>
</div>

<?php include 'footer.php'; ?>
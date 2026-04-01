<?php
session_start();
include 'config/koneksi.php';

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $q = mysqli_query($conn,"SELECT * FROM user WHERE username='$user'");
    $d = mysqli_fetch_assoc($q);

    if($d){
        if(password_verify($pass, $d['password'])){
            $_SESSION['user'] = $d['username'];
            header("Location: dashboard.php");
            exit;
        } else {
            echo "<script>alert('Password salah');</script>";
        }
    } else {
        echo "<script>alert('User tidak ditemukan');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
<div class="col-md-4 mx-auto">
<div class="card p-4 shadow">

<h4 class="text-center">Login</h4>

<form method="POST">
<input class="form-control mb-2" name="username" placeholder="Username" required>
<input class="form-control mb-2" type="password" name="password" placeholder="Password" required>
<button class="btn btn-primary w-100" name="login">Login</button>
</form>

</div>
</div>
</div>

</body>
</html>
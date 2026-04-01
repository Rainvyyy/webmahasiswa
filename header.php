<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Sistem Informasi Mahasiswa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body { margin:0; }

.sidebar {
    position: fixed;
    width: 220px;
    height: 100%;
    background: #343a40;
    color: white;
}

.sidebar a {
    color: white;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.sidebar a:hover {
    background: #495057;
}

.content {
    margin-left: 220px;
    padding: 20px;
}
</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4 class="text-center mt-3">🎓 Kampus</h4>

<a href="http://localhost/web_mahasiswa/dashboard.php">Dashboard</a>
<a href="http://localhost/web_mahasiswa/mahasiswa/index.php">Mahasiswa</a>
<a href="http://localhost/web_mahasiswa/ubah_password.php">Ubah Password</a>
<a href="http://localhost/web_mahasiswa/logout.php">Logout</a>
</div>

<!-- CONTENT -->
<div class="content">

<nav class="navbar navbar-light bg-light shadow-sm mb-3">
    <span class="navbar-brand">Sistem Informasi Mahasiswa</span>
</nav>
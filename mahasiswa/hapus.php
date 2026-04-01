<?php
include '../config/koneksi.php';

$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM mahasiswa WHERE id_mahasiswa='$id'");

header("Location: index.php");
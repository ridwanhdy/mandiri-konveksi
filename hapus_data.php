<?php
include('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi,"DELETE FROM produk WHERE id='$id'");
header('Location: app/index.php')
?>
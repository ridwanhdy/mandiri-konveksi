<?php
// Pastikan method POST yang digunakan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lakukan koneksi ke database
    include 'koneksi.php';

    // Ambil data dari form
    $id = $_POST['id'];
    $namaProduk = $_POST['namaProduk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    // Update data produk ke dalam database
    $query_update = "UPDATE produk SET namaProduk='$namaProduk', deskripsi='$deskripsi', harga='$harga' WHERE id='$id'";
    $result = mysqli_query($koneksi, $query_update);

    // Cek apakah update berhasil
    if ($result) {
        header('Location: app/index.php');
        echo "<script>alert('Data berhasil diupdate');</script>";
    } else {
        echo "<script>alert('Gagal mengupdate data');</script>";
    }

    // Redirect ke halaman utama atau halaman lain jika diperlukan
    // header('Location: halaman_utama.php');
}
?>
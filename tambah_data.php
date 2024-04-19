<?php
include('koneksi.php');

$namaProduk = $_POST['namaProduk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$gambar_nama = $_FILES['file']['name'];
$gambar_tmp = $_FILES['file']['tmp_name'];

$uploadDir = 'uploads/'; // Direktori tempat gambar akan disimpan
$uploadFile = $uploadDir . $gambar_nama; // Path lengkap file yang di-upload untuk disimpan

if(move_uploaded_file($gambar_tmp, $uploadFile)) {
    // Ubah gambar ke bentuk blob
    $gambar_blob = file_get_contents($uploadFile);
    $gambar_blob = mysqli_real_escape_string($koneksi, $gambar_blob); // Lindungi dari SQL injection

    // Simpan nama file dan blob ke database
    $query = mysqli_query($koneksi, "INSERT INTO produk (namaProduk, deskripsi, harga, gambar) VALUES ('$namaProduk', '$deskripsi', '$harga', '$gambar_blob')");

    if ($query) {
        // Berhasil disimpan, arahkan kembali dengan sukses atau sesuaikan dengan logika yang diinginkan
        header("Location: app/index.php?status=success");
    } else {
        // Error saat menyimpan
        header("Location: app/index.php?status=error");
    }
} else {
    // Gagal saat upload
    header("Location: app/index.php?status=upload_error");
}
?>
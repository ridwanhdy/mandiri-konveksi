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

    // Prepare the query
    $query_update = "UPDATE produk SET namaProduk='$namaProduk', deskripsi='$deskripsi', harga='$harga'";

    // Check if a new image was uploaded
    if (isset($_FILES['gambar']) && $_FILES['gambar']['size'] > 0) {
        $gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
        $query_update .= ", gambar='$gambar'";
    }

    $query_update .= " WHERE id='$id'";

    // Execute the query
    $result = mysqli_query($koneksi, $query_update);

    // Cek apakah update berhasil
    if ($result) {
        echo "<script>alert('Data berhasil diupdate');</script>";
        header('Location: app/index.php');
    } else {
        echo "<script>alert('Gagal mengupdate data');</script>";
    }

    // Redirect ke halaman utama atau halaman lain jika diperlukan
    // header('Location: halaman_utama.php');
}
?>
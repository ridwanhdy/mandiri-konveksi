<?php
include('../koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

    if (!empty($_FILES['gambar']['tmp_name'])) {
        $gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
        $query = "UPDATE tentangkami SET judul='$judul', deskripsi='$deskripsi', gambar='$gambar' WHERE id='$id'";
    } else {
        $query = "UPDATE tentangkami SET judul='$judul', deskripsi='$deskripsi' WHERE id='$id'";
    }

    if (mysqli_query($koneksi, $query)) {
        header('Location: edittentangkami.php');
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($koneksi);
    }
}
?>

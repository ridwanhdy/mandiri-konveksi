<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
    exit();
}

include('../koneksi.php');

if (isset($_POST['tambah'])) {
    $judul = $_POST['judul'];
    $paragraf = $_POST['paragraf'];
    $gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));

    $query = "INSERT INTO artikel (judul, paragraf, gambar, tanggal_dibuat) VALUES ('$judul', '$paragraf', '$gambar', NOW())";
    if (mysqli_query($koneksi, $query)) {
        header('Location: editartikel.php');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $paragraf = $_POST['paragraf'];

    if (!empty($_FILES['gambar']['tmp_name'])) {
        $gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
        $query = "UPDATE artikel SET judul='$judul', paragraf='$paragraf', gambar='$gambar' WHERE id='$id'";
    } else {
        $query = "UPDATE artikel SET judul='$judul', paragraf='$paragraf' WHERE id='$id'";
    }

    if (mysqli_query($koneksi, $query)) {
        header('Location: editartikel.php');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM artikel WHERE id='$id'";
    if (mysqli_query($koneksi, $query)) {
        header('Location: editartikel.php');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>

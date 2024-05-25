
<?php include('../koneksi.php'); ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

    // Query untuk update data
    $query_update = "UPDATE tentangkami SET judul='$judul', deskripsi='$deskripsi' WHERE id='$id'";
    $result = mysqli_query($koneksi, $query_update);

    if ($result) {
        // Jika berhasil diupdate, redirect ke halaman utama
        header('Location: edittentangkami.php');
        exit();
    } else {
        echo "Gagal mengupdate data.";
    }
}
?>

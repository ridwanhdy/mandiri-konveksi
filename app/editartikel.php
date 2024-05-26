<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
    exit();
}
?>

<?php include('header.php'); ?>
<?php include('../koneksi.php'); ?>

<?php
// Fungsi untuk memotong teks hingga 250 kata
function limit_words($text, $limit) {
    $words = explode(' ', $text);
    if (count($words) > $limit) {
        $text = implode(' ', array_slice($words, 0, $limit)) . '...';
    }
    return $text;
}
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include('navbar.php'); ?>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <?php include('sidebar.php'); ?>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- /.content-header -->

            <!-- Main content -->
           <!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-info float-left" data-toggle="modal" data-target="#modal-tambah">Tambah Artikel</button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Paragraf</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($koneksi, "SELECT * FROM artikel ORDER BY tanggal_dibuat DESC");
                                while ($artikel = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td width='5%'><?php echo $artikel['id']; ?></td>
                                        <td><?php echo $artikel['judul']; ?></td>
                                        <td><?php echo limit_words($artikel['paragraf'], 20); ?></td>
                                        <td><img src="data:image/jpeg;base64,<?php echo base64_encode($artikel['gambar']); ?>" alt="Gambar" width="100"></td>
                                        <td width="400px">
                                            <a class="btn btn-primary" style="margin-right: 5px;" data-toggle="modal" data-target="#modal-edit<?php echo $artikel['id']; ?>">Edit</a>
                                            <a class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus<?php echo $artikel['id']; ?>">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- modal tambah -->
        <div class="modal fade" id="modal-tambah">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Artikel</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="edit_artikel.php" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Paragraf</label>
                                <textarea name="paragraf" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" class="form-control" required onchange="previewImage(this, 'preview-tambah')">
                                <img id="preview-tambah" alt="Preview Gambar" width="100" class="mt-3">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="tambah" class="btn btn-primary">Tambah Artikel</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- modal edit -->
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM artikel ORDER BY tanggal_dibuat DESC");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <div class="modal fade" id="modal-edit<?php echo $data['id']; ?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="edit_artikel.php" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control" value="<?php echo $data['judul']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Paragraf</label>
                                <textarea name="paragraf" class="form-control"><?php echo limit_words($data['paragraf'], 250); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" class="form-control" onchange="previewImage(this, 'preview<?php echo $data['id']; ?>')">
                                <img id="preview<?php echo $data['id']; ?>" src="data:image/jpeg;base64,<?php echo base64_encode($data['gambar']); ?>" alt="Preview Gambar" width="100" class="mt-3">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <?php } ?>

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.
            </strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

        function previewImage(input, previewId) {
            var preview = document.getElementById(previewId);
            var file = input.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>

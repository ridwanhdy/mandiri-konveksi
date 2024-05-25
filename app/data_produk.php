<!-- Content Wrapper. Contains page content -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                            Tambah Data
                        </button>
                        <br></br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                              $query = mysqli_query($koneksi,"SELECT * FROM produk");
                              while($produk = mysqli_fetch_array($query)){
                              ?>
                                <tr>
                                    <td width='5%'><?php echo $produk['id'];?></td>
                                    <td><?php echo $produk['namaProduk'];?></td>
                                    <td><?php echo substr($produk['deskripsi'], 0, 50); ?></td>
                                    <td><?php echo $produk['harga'];?></td>
                                    <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $produk['gambar'] ).'" style="max-width: 100px; max-height: 100px;" />';?>
                                    </td>
                                    </td>
                                    <td><a class="btn btn-primary" style="margin-right: 5px;" data-toggle="modal"
                                            data-target="#modal-edit<?php echo $produk['id']; ?>">Edit</a><a
                                            onclick="hapus_data(<?php echo $produk['id'];?>)"
                                            class="btn btn-danger">Hapus</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                    <th>CSS grade</th>
                                </tr>
                            </tfoot>
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
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Large Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="../tambah_data.php" enctype="multipart/form-data">
                <div class="modal-body">
                    <!-- general form elements disabled -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Produk</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input type="text" name="namaProduk" class="form-control"
                                            placeholder="Nama Produk ..." required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Deskripsi Produk</label>
                                        <textarea class="form-control" name="deskripsi" rows="3"
                                            placeholder="Deskripsi Produk ..." required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Harga Produk</label>
                                        <input type="number" name="harga" class="form-control" placeholder="Rp ..."
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Gambar Produk</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input" id="gambar">
                                        <label class="custom-file-label" for="exampleInputFile">Pilih File</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- /.modal -->
<!-- modal edit -->
<?php
$query = mysqli_query($koneksi, "SELECT * FROM produk");
while($produk = mysqli_fetch_array($query)){
?>
<div class="modal fade" id="modal-edit<?php echo $produk['id']; ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="../edit_data.php" enctype="multipart/form-data">
                <div class="modal-body">
                    <!-- general form elements disabled -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Form Edit Produk</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input type="text" name="namaProduk" class="form-control"
                                            value="<?php echo $produk['namaProduk']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Deskripsi Produk</label>
                                        <textarea class="form-control" name="deskripsi" rows="3"
                                            placeholder="Deskripsi Produk ..."><?php echo $produk['deskripsi']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Harga Produk</label>
                                        <input type="number" name="harga" class="form-control"
                                            value="<?php echo $produk['harga']; ?>" placeholder="Rp ...">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Gambar Produk</label>
                                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($produk['gambar']).'" style="max-width: 100px; max-height: 100px;" />';?>
                                <br>
                                <label>Edit Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <input type="hidden" name="id" value="<?php echo $produk['id']; ?>">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php } ?>
<!-- end modal edit -->

<!-- end modal edit -->


<script>
function hapus_data(data_id) {
    if (confirm('Anda yakin ingin menghapus data ini?')) {
        // Jika pengguna mengonfirmasi "OK", maka arahkan untuk menghapus data
        window.location = "../hapus_data.php?id=" + data_id;
    } else {
        // Jika pengguna membatalkan penghapusan, tidak melakukan apa pun
    }
}
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="library/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="style/main.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <title>Detail Produk - Mandiri Konveksi</title>
</head>

<body>
    <header>
        <nav class="main-nav">
            <div class="brand text-main">
                <a href="index.php">
                    <h1>MANDIRI KONVEKSI</h1>
                </a>
            </div>
            <div class="links">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="tentangkami.php">Tentang Kami</a></li>
                    <li><a href="artikel.php">Artikel</a></li>
                    <li><a href="produk.php">Product</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- /header -->

    <main>
        <!-- Detail Produk Section -->
        <section class="detail-produk-section">
            <div class="container">
                <?php
                include('koneksi.php');
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $query = "SELECT * FROM produk WHERE id = $id";
                    $result = mysqli_query($koneksi, $query);
                    $row = mysqli_fetch_assoc($result);
                    if ($row) {
                ?>
                <div class="row">
                    <div class="col-md-6">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($row['gambar']); ?>" class="img-fluid" alt="Gambar Produk">
                    </div>
                    <div class="col-md-6">
                        <h2><?php echo $row['namaProduk']; ?></h2>
                        <p><?php echo $row['deskripsi']; ?></p>
                        <h3>Harga: Rp.<?php echo $row['harga']; ?></h3>
                        <button class="btn btn-primary">
                            <img src="gambar/wa.png" alt="WhatsApp Logo" style="width: 20px; height: 20px; margin-right: 8px;">
                            Chat Penjual
                        </button>
                    </div>
                </div>
                <?php
                    } else {
                        echo "Produk tidak ditemukan.";
                    }
                } else {
                    echo "ID produk tidak ditemukan.";
                }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content row mb-4">
                <div class="footer-brand col-12 col-sm-12 col-md-3 col-lg-3">
                    <div>
                        <h1 class="text-main">MANDIRI KONVEKSI</h1>
                    </div>
                </div>

                <div class="footer-items-box col-12 col-sm-12 col-md-9 col-lg-9">
                    <div class="footer-items row">
                        <div class="footer-item col-12 col-sm-12 col-md-4">
                            <div>
                                <div class="footer-item-content">
                                    <h3 class="text-main">Navigasi</h3>
                                    <p><a href="#">Home</a></p>
                                    <p><a href="#">Tentang Kami</a></p>
                                    <p><a href="#">Product</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="footer-item col-12 col-sm-12 col-md-4">
                            <div>
                                <div class="footer-item-content">
                                    <h3 class="text-main">Business</h3>
                                    <p><a href="#">mandirikonveksimagetan@gmail.com</a></p>
                                    <p><a href="#">021-1234-5678</a></p>
                                    <p><a href="#">Takeran, Magetan, Jawa Timur</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="footer-item col-12 col-sm-12 col-md-4">
                            <div>
                                <div class="footer-item-content">
                                    <h3 class="text-main">Social</h3>
                                    <a href="#" class="ig-icon">
                                        <img src="assets/images/instagram.png" alt="ig" class="img-fluid" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-section border-top">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright-content text-center mt-4">
                            <p class="text-second">
                                Mandiri Konveksi Copyright &copy; 2024 All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="library/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="script/index.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>

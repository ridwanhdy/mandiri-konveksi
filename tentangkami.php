<!DOCTYPE html>
<html lang="en">

<?php
include('koneksi.php');
$result = mysqli_query($koneksi, "SELECT * FROM tentangkami LIMIT 1"); // Ambil data pertama saja
$data = mysqli_fetch_assoc($result);
?>

<?php
include('koneksi.php');
$result = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY RAND() LIMIT 4");
?>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="library/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="style/main.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/margin/margin.css">
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/padding/padding.css">
    <title>Mandiri Konveksi | Homepage</title>

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
                    <li><a href="produk.php">Product</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- /header -->

    <main>
  <!-- About 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5">
  <div class="container">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6 col-xl-5">
        <img class="img-fluid rounded" loading="lazy" src="gambar/mandiri.jpg" alt="About 1">
      </div>
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
          <h2 class="mb-3"><?php echo $data['judul']; ?></h2>
          <p class="lead fs-4 mb-3"><?php echo $data['deskripsi']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </main>
    <!--main-->

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
                                    <p><a href="produk.php">Product</a></p>
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
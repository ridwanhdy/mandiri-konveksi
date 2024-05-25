<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/margin/margin.css">
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
        <!--BANNER-->
        <section class="banner">
            <div class="container">
                <div class="row justify-content-center align-items-center pad-tab" data-aos="fade-up">
                    <div class="banner-text col-sm-12 col-md-6">
                        <p class="text-second">Mandiri Konveksi</p>
                        <h1 class="text-main secondary-col">
                            Berkualitas dan Harga Terjangkau
                        </h1>
                        <p class="text-second">
                            Konveksi terpercaya yang sudah menangani banyak permintaan untuk
                            membuat seragam sekolah, celana sablon kaos dan lain sebagainya.
                        </p>
                        <a href="produk.php" class="btn-rounded text-main">Produk Kami</a>
                    </div>
                    <div class="banner-image col-sm-12 col-md-6 d-none d-sm-block">
                        <img src="assets/images/image.png" alt="image-banner" class="img-fluid" />
                    </div>
                </div>
            </div>
        </section>

     <!-- Service 10 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">Layanan Kami</h2>
        <p class="text-secondary mb-5 text-center lead fs-4">Mandiri Konveksi selalu memberikan yang terbaik.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="container-fluid">
          <div class="row gy-3 gy-md-4">
            <div class="col-12 col-lg-4">
              <div class="card border-dark">
                <div class="card-body p-3 p-md-4 p-xxl-5 d-flex justify-content-center align-items-center">
                  <div class="me-3 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
                      <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1" />
                    </svg>
                  </div>
                  <div>
                    <h4 class="mb-1">Gratis Pengiriman</h4>
                    <p class="m-0 text-secondary">Gratis Pengiriman Daerah magetan dan Madiun!</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card border-dark">
                <div class="card-body p-3 p-md-4 p-xxl-5 d-flex justify-content-center align-items-center">
                  <div class="me-3 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-chat-left-heart-fill" viewBox="0 0 16 16">
                      <path d="M2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
                    </svg>
                  </div>
                  <div>
                    <h4 class="mb-1">Konsultasi Gratis!</h4>
                    <p class="m-0 text-secondary">Konsultasi Dengan Admin Gratis 24 Jam!</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card border-dark">
                <div class="card-body p-3 p-md-4 p-xxl-5 d-flex justify-content-center align-items-center">
                  <div class="me-3 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-folder-symlink-fill" viewBox="0 0 16 16">
                      <path d="M13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2l.04.87a2 2 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3M2.19 3q-.362.002-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293L7.586 3zm9.608 5.271-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742" />
                    </svg>
                  </div>
                  <div>
                    <h4 class="mb-1">Garansi Produk</h4>
                    <p class="m-0 text-secondary">Garansi Uang Kembali Jika Produk Kami Tidak Sesuai Request Anda!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>   




        <!--PRODUCTS-->
        <section class="products-section">
            <div class="container">
                <div class="text-products row align-items-center">
                    <div class="title-product col-7 col-sm-6 col-md-9">
                        <h2 class="text-main">PRODUK KAMI</h2>
                    </div>
                    <div class="text-show-all text-right text-main col-5 col-sm-6 col-md-3 pr-md-0">
                        <a href="produk.php">
                            <p>
                                SHOW ALL
                                <img src="assets/icons/arrow-2.png" alt="icon-arrow" />
                            </p>
                        </a>
                    </div>
                </div>

                <div class="products row justify-content-center">
                    <?php

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="product col-12 col-sm-12 col-md-6 col-lg-3 mb-md-4 md-lg-0" data-aos="fade-up" style="">
                        <div class="bg-white" style="">
                            <div class="product-image text-center">
                                <?php echo '<img style="widht: 250px; height: 250px;" src="data:image/jpeg;base64,'.base64_encode($row['gambar']).'" alt="product" class="img-fluid" />'; ?>
                            </div>
                            <div class="desc-product" style="height: 150px">
                                <!-- Update link to include product id -->
                                <a href="detail_produk.php?id=<?php echo $row['id']; ?>">
                                    <p class="text-second"><?php echo $row['namaProduk']; ?></p>
                                    <p class="text-second">Rp.<?php echo $row['harga']; ?></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </section>

        <!--Preview-->
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
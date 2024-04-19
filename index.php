<!DOCTYPE html>
<html lang="en">

<?php
include('koneksi.php');
$query = "SELECT id, namaProduk, harga, gambar FROM produk ORDER BY harga DESC LIMIT 4";
$result = mysqli_query($koneksi, $query);
?>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="library/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="style/main.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <title>Mandiri Konveksi | Homepage</title>

</head>

<body>
    <header>
        <nav class="main-nav">
            <div class="brand text-main">
                <a href="#">
                    <h1>MANDIRI KONVEKSI</h1>
                </a>
            </div>
            <div class="links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Tentang Kami</a></li>
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
                        <a href="#" class="btn-rounded text-main">Produk Kami</a>
                    </div>
                    <div class="banner-image col-sm-12 col-md-6 d-none d-sm-block">
                        <img src="assets/images/image.png" alt="image-banner" class="img-fluid" />
                    </div>
                </div>
            </div>
        </section>

        <!--NEW ARRIVALS-->
        <section class="py-3 py-md-5 py-xl-8">
            <div class="container">
                <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                    <div class="col-12 col-lg-6 col-xl-7">
                        <div class="row justify-content-xl-center">
                            <div class="col-12 col-xl-11">
                                <h2 class="h1 mb-3">Tentang Kami</h2>
                                <p class="">
                                </p>
                                <p class="lead fs-4 mb-4 text-bold">Mandiri Konveksi sebagai UKM Konveksi
                                    Seragam di Magetan sudah dipercaya oleh ribuan customer mulai dari perusahaan,
                                    instansi pendidikan, dan komunitas yang tersebar di Magetan dan Sekitarnya. Kami
                                    juga telah berkarya memproduksi jutaan produk
                                    pakaian seragam selama lebih dari 9 tahun dalam bisnis garmen dengan standar dan
                                    kualitas yang selalu kami jaga.</p>
                                <div class="row gy-4 gy-md-0 gx-xxl-5X">
                                    <div class="col-12 col-md-6">
                                        <div class="d-flex">
                                            <div class="me-4 text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="mb-3">Semuanya Diproduksi Sendiri</h4>
                                                <p class="text-secondary mb-0">Kami mempunyai tempat produksi 1 atap
                                                    mulai dari potong bahan – bordir / sablon – jahit – packing hingga
                                                    siap dikirim.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="d-flex">
                                            <div class="me-4 text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                                    <path
                                                        d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="mb-3">Harga Kompetitif</h4>
                                                <p class="text-secondary mb-0">Tentunya dengan semua pekerjaan dilakukan
                                                    sendiri akan dapat menekan biaya produksi yang cukup signifikan.</p>
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
                        <a href="#">
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
                    <div class="product col-12 col-sm-12 col-md-6 col-lg-3 mb-md-4 md-lg-0" data-aos="fade-up">
                        <div class="bg-white">
                            <div class="product-image text-center">
                                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['gambar']).'" alt="product" class="img-fluid" />'; ?>
                            </div>
                            <div class="desc-product">
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
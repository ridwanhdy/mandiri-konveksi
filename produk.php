<!DOCTYPE html>
<html lang="en">

<?php
include('koneksi.php');
$query = "SELECT id, namaProduk, harga, gambar FROM produk ORDER BY harga";
$result = mysqli_query($koneksi, $query);
?>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="library/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="style/main.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <title>Mandiri Konveksi | Homepage</title>

    <style>
    .products-section .products {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .products-section .product {
        width: 350px;
        height: 350px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        margin: 10px;
    }

    .products-section .product .bg-white {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    .products-section .product .product-image {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .products-section .product .product-image img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
    }

    .products-section .product .desc-product {
        padding: 10px;
        text-align: center;
    }

    .products-section .desc-product p {
        margin: 0;
    }
</style>


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
        <!--PRODUCTS-->
        <section class="products-section">
    <div class="container">
        <div class="text-products row align-items-center">
            <div class="title-product col-7 col-sm-6 col-md-9">
                <h2 class="text-main">PRODUK KAMI</h2>
            </div>
        </div>

        <div class="products row justify-content-center">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="product col-12 col-sm-12 col-md-6 col-lg-3 mb-md-4 md-lg-0" data-aos="fade-up">
                    <div class="bg-white">
                        <div class="product-image text-center">
                            <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['gambar']) . '" alt="product" class="img-fluid" />'; ?>
                        </div>
                        <div class="desc-product">
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
                                    <p><a href="index.php">Home</a></p>
                                    <p><a href="index.php">Tentang Kami</a></p>
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
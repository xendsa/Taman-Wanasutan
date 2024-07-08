<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora Fauna | Taman Wanasutan Asri</title>
    <link rel="stylesheet" href="css-databuku.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&amp;display=swap&amp;subset=latin-ext"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&amp;display=swap&amp;subset=latin-ext"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel="icon" href="images/favicon.png" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Taman Wanasutan Asri</a>
            <!-- Menggunakan path "../index.php" untuk menuju ke halaman utama -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../index.php">Home</a>
                        <!-- Menggunakan path "../index.php" untuk menuju ke halaman utama -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="stylesheet" href="../arsip/arsip.php">Arsip</a>
                        <!-- Tetap menggunakan path "index.php" untuk menuju ke arsip.php -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="stylesheet" href="../flora-fauna/florafauna.php">Flora Fauna</a>
                        <!-- Menggunakan path "../floraFauna.php" untuk menuju ke floraFauna.php -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="stylesheet" href="databuku.php">Poca Buku</a>
                        <!-- Menggunakan path "../dataBuku.php" untuk menuju ke dataBuku.php -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="header">
        <div class="header-image">
            <img src="picture/background.jpg" alt="">
        </div>
        <div class="header-content">
            <p>Pojok Baca</p>
            <p>Membaca merupakan awal dari membuka dunia</p>
            <button type="button" class="btn btn-outline-primary">Lihat Daftar Buku</button>
        </div>
    </div>
    <div class="book-container">
        <div class="book-list">

            <div class="book-item">
                <div class="book-image-container">
                    <img src="picture/buku1.jpeg" alt="">
                </div>
                <h3>Buku 1</h3>
            </div>
            <div class="book-item">
                <div class="book-image-container">
                    <img src="picture/buku2.jpg" alt="">
                </div>
                <h3>Buku 1</h3>
            </div>
            <div class="book-item">
                <div class="book-image-container">
                    <img src="picture/buku3.jpg" alt="">
                </div>
                <h3>Buku 1</h3>
            </div>
            <div class="book-item">
                <div class="book-image-container">
                    <img src="picture/buku4.jpg" alt="">
                </div>
                <h3>Buku 1</h3>
            </div>
            <div class="book-item">
                <div class="book-image-container">
                    <img src="picture/buku1.jpeg" alt="">
                </div>
                <h3>Buku 1</h3>
            </div>

        </div>
    </div>

    <div class="footer">
        <div class="top">
            <div class="footer-link">
                <h2>Content</h2>
                <div class="links">
                    <a href="#dashboard">Halaman utama</a>
                    <a href="#arsip-kegiatan">Arsip Kegiatan</a>
                    <a href="#arsip-kompos">Arsip Kompos</a>
                    <a href="#arsip-event">Arsip Event</a>
                </div>
            </div>
            <div class="informations">
                <h2>Informasi</h2>
                <div class="links">
                    <a href="#all-arsips">Informasi Umum</a>
                </div>
            </div>
            <div class="sosial-media">
                <h2>Sosial Media</h2>
                <div class="links">
                    <a href="#" id="instagram-btn"><i class="ri-instagram-fill"></i>
                        Instagram</a>
                    <a href="#" id="tiktok-btn"><i class="ri-tiktok-fill"></i> TikTok</a>
                </div>
            </div>
        </div>
        <div class="bottom">
            <a href="../../index.php">Taman Wanasutan</a>
            <a href="arsip.php#navbar" class="back-btn"><i class="ri-arrow-up-s-fill"></i></a>
        </div>
    </div>

</body>

</html>
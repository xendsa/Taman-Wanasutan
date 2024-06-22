<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora Fauna | Taman Wanasutan Asri</title>
    <link rel="stylesheet" href="css-florafauna.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&amp;display=swap&amp;subset=latin-ext"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&amp;display=swap&amp;subset=latin-ext"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link href="styles.css" rel="stylesheet" />

    <link rel="icon" href="images/favicon.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Taman Wanasutan Asri</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="stylesheet" href="../arsip/arsip.php">Arsip</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="stylesheet" href="../flora-fauna/florafauna.php">Flora Fauna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="stylesheet" href="../data-buku/databuku.php">Poca Buku</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="sample-container-1">
        <img src="picture/1.jpg" alt="">
        <div class="text">
            <h1>Flora</h1>
            <p>Kekayaan flora merupakan harta karun alam yang tak ternilai harganya. Flora memberikan kehidupan,
                keindahan, dan keseimbangan bagi ekosistem kita. Mereka bukan hanya elemen dekoratif di taman-taman,
                tetapi juga memainkan peran krusial dalam menjaga kesehatan lingkungan. Memahami pentingnya pelestarian
                flora, Taman Wanasutan Asri berdedikasi untuk melindungi dan merayakan keanekaragaman hayati yang ada di
                dalamnya.</p>
        </div>
    </div>

    <div class="container">

        <div class="flora-container">

            <div class="flora" data-name="flora-1">
                <img src="picture/1.jpg" alt="">
                <h3>Pohon 1</h3>
            </div>

            <div class="flora" data-name="flora-2">
                <img src="picture/2.jpeg" alt="">
                <h3>Pohon 1</h3>
            </div>

            <div class="flora" data-name="flora-3">
                <img src="picture/1.jpg" alt="">
                <h3>Pohon 1</h3>
            </div>

            <div class="flora" data-name="flora-4">
                <img src="picture/1.jpg" alt="">
                <h3>Pohon 1</h3>
            </div>

            <div class="flora" data-name="flora-5">
                <img src="picture/2.jpeg" alt="">
                <h3 id="text-fauna-name">Pohon 1</h3>
            </div>

            <div class="flora" data-name="flora-6">
                <img src="picture/1.jpg" alt="">
                <h3>Pohon 1</h3>
            </div>

        </div>

    </div>

    <div class="sample-container-2">
        <div class="text">
            <h1>Fauna</h1>
            <p>Kekayaan fauna adalah aset berharga yang memelihara keseimbangan alam dan mendukung kehidupan di bumi.
                Menjaga dan memelihara segala jenis fauna bukan hanya tentang melindungi spesies individu, tetapi juga
                tentang mempertahankan ekosistem yang sehat dan berkelanjutan bagi generasi mendatang. Fauna memainkan
                peran penting dalam rantai makanan, penyebaran benih, dan menjaga kesehatan lingkungan. Oleh karena itu,
                upaya konservasi dan perlindungan fauna harus menjadi prioritas bersama untuk memastikan kelestarian
                alam kita.</p>
        </div>
        <img src="picture/cats.jpg" alt="">

    </div>

    <div class="container">

        <div class="fauna-container">

            <div class="fauna" data-name="fauna-1">
                <img src="picture/cats.jpg" alt="">
                <div id="text-fauna-name" class="fauna-name">
                    <h3>Fauna 1</h3>
                </div>
            </div>

            <div class="fauna" data-name="fauna-2">
                <img src="picture/panda.jpeg" alt="">
                <h3>Fauna 1</h3>
            </div>

            <div class="fauna" data-name="fauna-3">
                <img src="picture/rabbit.jpg" alt="">
                <h3>Fauna 1</h3>
            </div>

            <div class="fauna" data-name="fauna-4">
                <img src="picture/cats.jpg" alt="">
                <h3>Fauna 1</h3>
            </div>

            <div class="fauna" data-name="fauna-5">
                <img src="picture/panda.jpeg" alt="">
                <h3>Fauna 1</h3>
            </div>

            <div class="fauna" data-name="fauna-6">
                <img src="picture/rabbit.jpg" alt="">
                <h3>Fauna 1</h3>
            </div>


        </div>
    </div>

    <div class="item-preview">
        <div class="preview" data-target="flora-1">
            <span>&times;</span>
            <img src="picture/1.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        </div>

        <div class="preview" data-target="flora-2">
            <span>&times;</span>
            <img src="picture/2.jpeg" alt="">
            <h3>organic onions</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        </div>
        <div class="preview" data-target="flora-3">
            <span>&times;</span>
            <img src="picture/1.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        </div>

        <div class="preview" data-target="flora-4">
            <span>&times;</span>
            <img src="picture/2.jpeg" alt="">
            <h3>organic onions</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        </div>
        <div class="preview" data-target="flora-5">
            <span>&times;</span>
            <img src="picture/1.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        </div>

        <div class="preview" data-target="flora-6">
            <span>&times;</span>
            <img src="picture/2.jpeg" alt="">
            <h3>organic onions</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
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

    <script src="js/script.js"></script>
</body>

</html>
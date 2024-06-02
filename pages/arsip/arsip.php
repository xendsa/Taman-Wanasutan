<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Arsip | Taman Wanasutan Asri</title>
  <link rel="stylesheet" href="css-arsip.css" />

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
            <a class="nav-link" rel="stylesheet" href="arsip.php">Arsip</a>
            <!-- Tetap menggunakan path "index.php" untuk menuju ke arsip.php -->
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="stylesheet" href="../flora-fauna/floraFauna.php">Flora Fauna</a>
            <!-- Menggunakan path "../floraFauna.php" untuk menuju ke floraFauna.php -->
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="stylesheet" href="../data-buku/dataBuku.php">Poca Buku</a>
            <!-- Menggunakan path "../dataBuku.php" untuk menuju ke dataBuku.php -->
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">

    <div class="slide">


      <div class="item" style="background-image: url(picture/1.png);">
        <div class="content">
          <div class="name">Switzerland</div>
          <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
          <button>Lihat Detail</button>
        </div>
      </div>
      <div class="item" style="background-image: url(picture/2.png);">
        <div class="content">
          <div class="name">Finland</div>
          <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
          <button>See More</button>
        </div>
      </div>
      <div class="item" style="background-image: url(picture/3.png);">
        <div class="content">
          <div class="name">Iceland</div>
          <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
          <button>Lihat Detail</button>
        </div>
      </div>
      <div class="item" style="background-image: url(picture/1.png);">
        <div class="content">
          <div class="name">Australia</div>
          <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
          <button>Lihat Detail</button>
        </div>
      </div>
      <div class="item" style="background-image: url(picture/2.png);">
        <div class="content">
          <div class="name">Netherland</div>
          <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
          <button>Lihat Detail</button>
        </div>
      </div>
      <div class="item" style="background-image: url(picture/3.png);">
        <div class="content">
          <div class="name">Ireland</div>
          <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
          <button>Lihat Detail</button>
        </div>
      </div>

    </div>

    <div class="button">
      <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
      <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>

  </div>

  <div class="all-arsip">

  </div>

  <script src="js/script.js"></script>
</body>

</body>

</html>
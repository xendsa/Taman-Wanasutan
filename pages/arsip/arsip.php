<?php
require 'connect.php';

getArsip();
$arsipData = getArsip();
?>

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
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
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

  <div class="all-arsips" id="all-arsips">
    <div class="text-search">
      <div class="form-search-kegiatan" id="search-div">
        <h1 class="text-title">Cari Kegiatan</h1>
        <form action="arsip.php#cols-search" method="get">
          <input type="text" name="nama_kegiatan" placeholder="Cari Kegiatan..">
          <input class="button-search" name="cari" type="submit" value="Cari">
        </form>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex repellat inventore, perspiciatis explicabo
        reprehenderit, iusto maiores dolor id, recusandae suscipit soluta quia a. Culpa facilis sapiente nihil eaque
        suscipit id iure dignissimos inventore dolorem nesciunt. Eveniet iure aliquam nobis repellendus cum doloremque
        hic. Nemo nostrum unde dolor a sint! Reprehenderit.</p>
    </div>
    <div class="arsip-kegiatan">
      <h2 class="titel-arsip">Arsip Kegiatan Taman</h2>
      <div class="cols" id="colsDiv">
        <?php foreach ($arsipData as $arsip): ?>
          <div class="col">
            <a href="detail.php?id_arsip=<?php echo urlencode($arsip['id_arsip']); ?>" class="img-link">
              <img src="picture/i.jpg" alt="Kegiatan 1">
            </a>
            <h1 class="title-arsip">
              <?php echo htmlspecialchars($arsip['nama']); ?>
            </h1>
            <a href="detail.php?id_arsip=<?php echo urlencode($arsip['id_arsip']); ?>" class="detail-access">Lihat
              Detail</a>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="cols-search" id='cols-search'>
        <?php
        $dataFound = 'false';
        if (isset($_GET['cari'])) {
          $keyword = $_GET['nama_kegiatan']; // get nama kegiatan
          $sql = "SELECT * FROM arsip WHERE nama = '$keyword'";  // get arsip data
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $dataFound = 'true'; // Data found
            while ($row = $result->fetch_assoc()) { ?>
              <div class="col">
                <a href="detail.php?id_arsip=<?php echo urlencode($row['id_arsip']); ?>" class="img-link">
                  <img src="picture/i.jpg" alt="Kegiatan 1">
                </a>
                <div class="desc">
                  <h1 class="title-arsip">
                    <?php echo htmlspecialchars($row['nama']); ?>
                  </h1>
                  <a href="detail.php?id_arsip=<?php echo urlencode($row['id_arsip']); ?>" class="detail-access">Lihat
                    Detail</a>
                </div>
              </div>
              <button class="btn btn-primary" id="seeAll">Lihat Semua</button>
            <?php }
          } else {
            echo "<p>No results found for '$keyword'</p>";
          }
        }
        ?>
      </div>
    </div>
  </div>

  <div class="arsip-buku">
    
  </div>

  <footer class="footer">
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
  </footer>

  <script src="js/script.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const colsDiv = document.getElementById('colsDiv');
      const dataFound = <?php echo json_encode($dataFound); ?>;

      if (dataFound) {
        colsDiv.style.display = 'none';
      }
    })

    document.getElementById('seeAll').addEventListener('click', () => {
      document.querySelector('.cols-search').style.display = 'none';
      document.getElementById('colsDiv').style.display = 'grid';
    });
  </script>
</body>

</html>
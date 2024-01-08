<?php
session_start();
include ('../auth/koneksi.php');
// include ('viewproduk.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FRSTORE</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="style/style.css" />

    <!-- remixiIcon -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" />

    <!-- Favicon -->
    <link
      rel="shortcut icon"
      href="assets/img/favicon.png"
      type="image/x-icon" />
      <link rel="icon" href=" /img/icon/store-3-line.png" type="image/gif">
      <style type="text/css">
      .container-image{display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 10px;}
        </style>
  </head>
  <body>
    <header class="home" id="home">
      <nav class="container-navbar">
        <div class="navbar-logo">
          <h3>FR<span>STORE</span></h3>
        </div>

        <div class="navbar-content">
          <ul>
            <li><a href="#home">HOME</a></li>
            <li><a href="#Produk">PRODUK</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="tambahproduk.php">ADD PRODUCT</a></li>
            <li><a href="datapemesanan.php">PESANAN</a></li>
          </ul>
        </div>

        <div class="navbar-icon">
          <a href="../auth/logout.php" id="search"><i class="ri-shut-down-line"></i></a>
          <a href="#" id="Hamburger-menu"><i class="ri-menu-line"></i></a>
        </div>
      </nav>
      <div class="halaman-utama">
        <div class="isi-utama">
          <h1>Selamat Datang Di<br /><span>FRSTORE</span></h1>
          <h4>Banyak Menyediakan Hijab Muslimah Yang Bagus Dan Nyaman</h4>
          <p>INFO</p>
          <div class="info">
            <a href="#"><i class="ri-facebook-circle-fill"></i></a>
            <a href="#"><i class="ri-instagram-fill"></i></a>
            <a href="#"><i class="ri-tiktok-line"></i></a>
            <br />
          </div>
          <div class="button-utama">
            <a href="#Produk">Ayo Belanja</a>
          </div>
        </div>
      </div>
    </header>

    <section class="container-jenis">
      <div class="produk-judul" id="Produk">
        <h3>Produk</h3>
      </div>
       
      <div class="container-image">
        <?php
              $query = "SELECT * FROM product ORDER BY idproduct ASC";
              $result = mysqli_query($mysqli, $query);

              if(!$result){
                die("Query Error : ".mysqli_error($mysqli)." - ".mysqli_error($mysqli));
              }
              $no = 1;
              while ($row = mysqli_fetch_assoc($result)){           
            ?>
        <div class="produk-galeri">
          <div class="produk-item">
            <img src="img/<?php echo $row['image'];?>" alt="Gambar 1" width="300px" height="300px" />
            <div class="image-judul-produk">
              <h5><?php echo $row['nama'];?></h5>
              <h2>Rp.<?php echo $row['harga']?></h2>
              <a href="../order/orderproduk.php?idproduct=<?php echo $row['idproduct']; ?>">Beli Sekarang</a>
            </div>
            </div>
          </div>
          <?php
          $no++;
              }
          ?>

        
      </div>
    </section>

    <footer class="container-footer" id="Footer">
      <div class="isi-footer">
        <h2>Terima Kasih Sudah Belanja Di</h2>
        <h3>FRSTORE</h3>
        <p>Sosial Media</p>
        <div class="sosial-media">
          <a href="#"><i class="ri-facebook-circle-fill"></i></a>
          <a href="#"><i class="ri-instagram-fill"></i></a>
          <a href="#"><i class="ri-tiktok-line"></i></a>
        </div>
        <div class="contact">
          <p>Hubungi</p>
          <a href="https://api.whatsapp.com/send?phone=6288985017523"
            >088985017523</a
          >
          <p>Created by@FernandaArya</p>
        </div>
      </div>
    </footer>
    <!-- Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>

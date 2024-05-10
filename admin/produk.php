<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>RPL PRODUCTION - ADMIN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
</head>

<body class="starter-page-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="produk.php" class="logo d-flex align-items-center me-auto">
        <img src="../assets/img/logo.png" alt="">
        <h1 class="sitename">RPL PRODUCTION</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="produk.php#produk-section"><b>Admin</b></a></li>
          <li><a href="produk.php#produk-section">Produk</a></li>
          <li><a href="berita.php#berita-section">Berita</a></li>
          <li><a href="user.php#user-section">User</a></li>
          <li><a href="foto-kegiatan.php#foto-section">Foto Kegiatan</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">
    <!-- Starter Section Section -->
    <section id="produk-section" class="starter-section section">
      <!-- Section Title -->
      <div class="container">
        <a href="tambah-produk.php" class="btn btn-primary mt-2 mb-3">
          TAMBAH PRODUK
        </a>
      </div>
      <div class="container section-title" data-aos="fade-up">
        <form action="" method="" name="">
          <table class="table table-bordered table-striped table-responsive w-100">
            <tr>
                <th class="text-center">Nama Produk</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Foto</th>
                <th class="text-center">Keterangan</td>
                <th class="text-center">Excerpt</td>
                <th class="text-center">Tanggal Dibuat</td>
                <th class="text-center">Sunting</td>
            </tr>
            <tr>
                <td class="text-center">data dari db</td>
                <td class="text-center">data dari db</td>
                <td class="text-center">data dari db</td>
                <td class="text-center">data dari db</td>
                <td class="text-center">data dari db</td>
                <td class="text-center">data dari db</td>
                <td class="text-center">
                    <a href="edit-produk.php" class="btn btn-warning">Edit</a><a href="hapus-produk.php" class="btn btn-danger ms-3 me-3">Hapus</a>
                </td>
            </tr>
          </table>
        </form>
      </div>
      <!-- End Section Title -->
    </section>
    <!-- /Starter Section Section -->
  </main>

  <footer id="footer" class="footer position-relative">
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">All Rights Reserved</strong></p>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
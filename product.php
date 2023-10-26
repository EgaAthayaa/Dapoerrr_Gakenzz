<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  </head>
  <body style="height: 3000px">
    <!-- Kepalaa -->
  <nav class="navbar navbar-expand navbar-dark bg-primary sticky-top">
  <div class="container-lg">
    <a class="navbar-brand" href="#"> <i class="bi bi-shop"></i>DapoerGakenz</a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Username
          </a>
          <ul class="dropdown-menu dropdown-menu-end mt-2">
            <li><a class="dropdown-item" href="#"> <i class="bi bi-person-circle"></i> Profile</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Setting</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-left"></i> Logout/Keluar</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- EndHeader -->
<div class="container-lg">
  <div class="row">
    <!-- Side Bar -->
    <div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
  <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width:250px">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
          <li class="nav-item">
            <a class="nav-link active link-light" aria-current="page" href="index.php"> <i class="bi bi-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order.php"> <i class="bi bi-basket2-fill"></i> Pesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="costumer.php"> <i class="bi bi-people-fill"></i> Pelanggan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php"><i class="bi bi-card-checklist"></i> Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report.php"><i class="bi bi-clipboard2-fill"></i> Laporan</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    </div>
    <!-- Akhir SideBar hehe -->

    <!-- Content -->
    <div class="col-lg-9  mt-2">
    <div class="card">
  <div class="card-header">
    Produksi
  </div>
  <div class="card-body">
    <h5 class="card-title">Ini adalah Produksi</h5>
    <p class="card-text">DapoerGakenz ialah praktik memesan dan mengantarkan makanan melalui platform digital, yang memungkinkan pelanggan untuk menjelajahi menu, memesan hidangan favorit, dan menikmatinya tanpa harus meninggalkan rumah, dengan pesanan dikirim langsung ke pintu mereka. Ini adalah solusi praktis dan nyaman untuk mengeksplorasi berbagai pilihan kuliner dengan mudah melalui DapoerGakenz </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <!-- End Content -->
  </div>

  <div class="fixed-bottom text-center mb-2">
    CopyRight 2023 EgaThaya
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
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
    <?php include "SideBar.php"; ?>

    <!-- Akhir SideBar hehe -->

    <!-- Content -->
    <div class="col-lg-9  mt-2">
    <div class="card">
  <div class="card-header">
    Pesanan
  </div>
  <div class="card-body">
    <h5 class="card-title">Ini adalah Pesanan</h5>
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
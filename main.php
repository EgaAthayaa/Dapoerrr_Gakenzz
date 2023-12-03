<?php
// session_start();
if (empty($_SESSION['username_gakenz'])) {
    header('location:login');
    exit();
}

include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_gakenz]'");
$hasil = mysqli_fetch_array($query);


if ($hasil) {
} else {
    echo "No user found with the specified username.";
    exit();
}
?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gakenz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    </head>
    <body>
    <!-- Kepalaa -->
    <?php include "header.php"; ?>
<!-- EndHeader -->
<div class="container-lg">
    <div class="row mb-5">
    <!-- Side Bar -->
    <?php include "SideBar.php"; ?>
    <!-- Akhir SideBar hehe -->

    <!-- Content -->
    <?php
    include $page;
    ?>
    <!-- End Content -->
    </div>

    <div class="fixed-bottom text-center bg-light py-2">
    CopyRight 2023 EgaThaya (Penyiksaan Berakhir..)
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
        }

        form.classList.add('was-validated')
    }, false)
    })
})()
    </script>
    </body>
</html>
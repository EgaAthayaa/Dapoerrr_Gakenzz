    <?php
    session_start();
    if (isset($_GET['x']) && $_GET['x'] == 'home') {
      $page = "home.php";
      include "main.php";
    } elseif(isset($_GET['x']) && $_GET['x'] == 'order') {
      $page = "order.php";
      include "main.php";
    } elseif(isset($_GET['x']) && $_GET['x'] == 'user') {
      if($_SESSION['level_gakenz']==1){
        $page = "user.php";
        include "main.php";
      }else{
        $page = "home.php";
        include "main.php";
      }
    } elseif(isset($_GET['x']) && $_GET['x'] == 'Pelanggan') {
      $page = "costumer.php";
      include "main.php";
    } elseif(isset($_GET['x']) && $_GET['x'] == 'Laporan') {
      if($_SESSION['level_gakenz']==1){
        $page = "report.php";
        include "main.php";
      }else{
        $page = "home.php";
        include "main.php";
      }
    }elseif(isset($_GET['x']) && $_GET['x'] == 'menu') {
      $page = "menu.php";
      include "main.php";
    } elseif(isset($_GET['x']) && $_GET['x'] == 'login') {
      include "login.php";
    } elseif(isset($_GET['x']) && $_GET['x'] == 'logout') {
      include "proses/proses_logout.php";
    }elseif(isset($_GET['x']) && $_GET['x'] == 'katmenu') {
      $page = "katmenu.php";
      include "main.php";
    }elseif(isset($_GET['x']) && $_GET['x'] == 'orderitem') {
      $page = "order_item.php";
      include "main.php";
    } else {
      $page = "home.php";
      include "main.php";
    }
    ?>

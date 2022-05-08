<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx'></i>
      <span class="logo_name"></span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="../supplier/dashboad.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../product/product_read.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Products</span>
          </a>
        </li>

        <li>
          <a href="../supplier/read.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Suppllier</span>
          </a>
        </li>
        <li>
          <a href="../order/readorder.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Order Details</span>
          </a>
        </li>
        <li>
          <a href="../payment/payment_read.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Payment</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <a class="navbar-brand" href="#"><img src="../../images/logo2.png"  style="width:180px"></a>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      
      <div class="profile-details">
        <img src="../../images/admin.png" alt="">
        <span class="admin_name">Admin</span>
      </div>
    </nav>
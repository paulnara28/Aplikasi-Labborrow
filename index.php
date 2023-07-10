<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title> Peminjaman Alat </title>

<!-- Latest compiled and minified CSS -->
<head>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


</head>

<body>



  <style>
  footer {
  bottom: 0;
  left: 0;
  right: 0;
  background: #262424;
  height: auto;
  width: 100vw;
  font-family: "Open Sans";
  padding-top: 40px;
  color: #fff;
}
.footer-content {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  text-align: center;
}
.footer-content h3 {
  font-size: 1.8rem;
  font-weight: 400;
  text-transform: capitalize;
  line-height: 3rem;
}
.footer-content p {
  max-width: 500px;
  margin: 10px ;
  line-height: 28px;
  font-size: 14px;
}
.socials {
  list-style: none;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 1rem 0 3rem 0;
}
.socials li {
  margin: 0 10px;
}
.socials a {
  text-decoration: none;
  color: #fff;
}
.socials a i {
  font-size: 1.1rem;
  transition: color 0.4s ease;
}
.socials a:hover i {
  color: aqua;
}

.footer-bottom {
  background: #000;
  width: 100vw;
  padding: 20px 0;
  text-align: center;
}
.footer-bottom p {
  font-size: 14px;
  word-spacing: 2px;
  text-transform: capitalize;
}
.footer-bottom span {
  text-transform: uppercase;
  opacity: 0.4;
  font-weight: 200;
}
</style>





<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand and toggle get grouped for better mobile display -->
    <a class="navbar-brand" href="index.php">Peminjaman Alat</a>
    

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse d-flex" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">Contact</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="tentangkami.php" style="margin-right: 30px;">Tentang Kami</a>
    </li>
  </ul>
  <ul class="navbar-nav ms-auto">
    <li class="nav-item"></li>
      <a class="nav-link" href="login.php" >Login</a>
    </li>
  </ul>
</div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>

</br></br></br>
<?php
  include "carousel.php";
  ?>
  </br></br></br>

  <!--footer-->
  <footer>
   <div class="footer-content">
       <h3>LAB BORROW</h3>
       <p>Menyediakan solusi peminjaman barang untuk kebutuhan laboratorium. Dengan pengalaman bertahun-tahun dalam industri ini, kami mengerti betapa pentingnya memiliki akses yang mudah dan cepat terhadap peralatan dan barang-barang laboratorium yang diperlukan</p>
       <ul class="socials">
           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
           <li><a href="#"><i class="fa fa-youtube"></i></a></li>
           <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
       </ul>
   </div>
   <div class="footer-bottom">
       <p>Copyright &copy;2023 LabBorrow</p>
   </div>
</footer>



  <?php require_once "templates/footer.php" ?> <script type="text/javascript">
    $('.carousel').carousel();
    </script>
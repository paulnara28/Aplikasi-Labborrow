<?php
session_start();
if(!isset($_SESSION['admin'])) {
   header('location:login.php');
} else {
   $username = $_SESSION['admin'];
}
?>
<?php
include "config/koneksi.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    /* Style the sidebar */
    .sidebar {
      height: 100%;
      width: 200px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background: linear-gradient(to right, #2691D9, #0F9CFC);
      padding-top: 70px;
    }

    /* Style the navigation menu */
    .sidebar a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 16px;
      color: white;
      display: block;
    }

    /* Change color on hover */
    .sidebar a:hover {
      background-color: #F5F5F5;
      color: black;
    }

    /* Style the content */
    .content {
      margin-left: 200px;
      padding: 20px;
      padding-top: 30px;

    }
  </style>
</head>

<body>
  <div class="sidebar">
    <div class="">
    <a href="dashboard.php">Dashboard</a>
    <a href="barang.php">Barang</a>
    <a href="peminjam.php">Anggota</a>
    <a href="peminjaman.php">Peminjaman</a>
    <a href="pengembalian.php">Pengembalian</a>
    </div>
  </div>

  <div class="content">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Tambah Anggota</h2>
          <form role="form1" action="prosestambahpeminjam.php" method="post">
             <table>
                 <div class = "box-body">
                     <div class ="form-group">
                    </div>
                    <div class ="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="text"  name="nama" class="form-control" placeholder="Username..." required>
                    </div>
                   <div class ="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password"   name="password"
                        class="form-control" placeholder="Password..." required>
                    </div>

                        <div class="row">
                        <label>Kelas</label>
                    <div class ="form-group">
                        <div class="col-md-3">
                          <select name="kelas" class="form-control">
                            <option value="" disabled selected>- Pilih Kelas -</option>
                            <option value="10">X</option>
                            <option value="11">XI</option>
                            <option value="12">XII</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <select name="jurusan" class="form-control">
                            <option value="" disabled selected>- Pilih Jurusan -</option>
                            <option value="RPL">Rekayasa Perangkat Lunak</option>
                            <option value="MM">Multi Media</option>
                            <option value="JB">Jasa Boga</option>
                            <option value="TKJ">Teknik Komputer dan Jaringan</option>
                            <option value="APH">Akomodasi Perhotelan</option>
                            <option value="ANM">Animasi</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <select name="no" class="form-control">
                            <option value="" disabled selected>- No Kelas -</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                          </select>
                        </div>
                    </div>
                        </div>
               <div class="row" style="margin-top: 20px;">
                 <button type="submit" class="btn btn-danger">Tambah Data</button>
                 <a href="peminjam.php" class="btn btn-danger margin-top:10px;">Back </a>
               </div>
           </div>
        </div>
      </div>

    <?php require_once "templates/footer.php" ?>
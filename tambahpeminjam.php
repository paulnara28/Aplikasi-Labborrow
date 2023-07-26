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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="icon" type="image/png" href="./images/logo1.png">
  <title>Lab Borrow</title>
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
  <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
  <a href="barang.php"><i class="fas fa-box"></i> Barang</a>
  <a href="peminjam.php"><i class="fas fa-users"></i> Anggota</a>
  <a href="peminjaman.php"><i class="fas fa-clipboard"></i> Peminjaman</a>
  <a href="pengembalian.php"><i class="fas fa-undo"></i> Pengembalian</a>
  </div>

  <div class="content">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Tambah Anggota</h2>
          <form role="form1" action="prosestambahpeminjam.php" method="post">
             <table>
                 <div class = "box-body mt-3">
                  <hr>
                    <div class ="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="text"  name="nama" class="form-control mt-2" placeholder="Username..." required>
                    </div>
                   <div class ="form-group mt-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password"   name="password"
                        class="form-control mt-2" placeholder="Password..." required>
                    </div>

                        <div class="row mt-3">


                        <div class="col-md-3 mt-2">
                        <label>Jurusan :</label>
                          <select name="jurusan" class="form-control mt-2">
                            <option value="" disabled selected>- Pilih Jurusan -</option>
                            <option value="IF">Informatika</option>
                            <option value="SI">Sistem Informasi</option>
                            <option value="TI">Teknologi Informasi</option>
                            <option value="TK">Teknik Komputer </option>
                          </select>
                        </div>

                        <div class="col-md-3 mt-2">
                        <label>Nomor Kelas :</label>
                          <select name="no" class="form-control mt-2">
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

           </div>
        </div>
        
      </div>
      <div class="box mt-5" style="display: flex; justify-content: space-between;">
    <a href="peminjam.php" class="btn btn-danger">Back</a>
    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</button>
</div>



    
      </body>
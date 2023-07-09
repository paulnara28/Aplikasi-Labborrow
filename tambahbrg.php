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
          <h2 class="page-header">Tambah Barang</h2>
          <hr>
          <form role="form1" action="prosestambahbrg.php" method="post" enctype="multipart/form-data">  
             <table>
                 <div class = "box-body">
                     <div class ="form-group">
                    <label for="">Kode Barang </label>
                    <input type="text" name="id_brg" class="form-control" placeholder="Kode Barang..." required>
                    </div>
                    <div class ="form-group">
                    <label for="">Nama Barang </label>
                    <input type="text"  name="nama_brg" class="form-control" placeholder="Nama Barang..." required>
                    </div>
                   <div class ="form-group">
                    <label for="">Jenis Barang</label>
                    <input type="text"   name="jenis_brg" 
                    class="form-control" placeholder="Jenis Barang..." required>
                    </div>
                     <div class ="form-group">
                    <label for="">Stok Barang</label>
                    <input type="text"   name="stok_brg" 
                    class="form-control" placeholder="Stok Barang..." required>
                    </div>
                    
                    <div class ="form-group">
                      <label for="">Foto</label>
                      <input type="file" name="foto" class="form-control" placeholder="Foto..." required>
                    </div>
                     
            <div class="box=footer">
            </div>
            <tr>
            <td><button type="submit" class="btn btn-danger" name="tambah">Tambah Data</button></td>
            <td><a href="barang.php" class="btn btn-danger">Back</td>
            </tr>
            </div>
        </div>
      </div>


    <?php require_once "templates/footer.php" ?>
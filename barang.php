<?php
session_start();
if(!isset($_SESSION['admin'])) {
   header('location:login.php');
} else {
   $username = $_SESSION['admin'];
}
?>
<?php
include "config/koneksi.php"; ?>
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
          <h2 class="page-header">Data Barang</h2>
          <hr>

<div class="row-search" style="margin-top: 20px; display: flex; justify-content: flex-end;">
    <a href="tambahbrg.php" class="btn btn-primary"><i class="fa fa-plus"></i>+ Tambah Barang</a>
</div>


          <div class="row">
          <?php
         $query = $mysqli->query("SELECT * FROM barang ");
          while ($lihat=mysqli_fetch_array($query)){
            ?>
  <div class="col-md-4" style="margin-top: 30px; margin-bottom: 30px">
    <div class="card">
      <img src="<?php echo $lihat['foto']; ?>" class="card-img-top" alt="" width="350px" height="300px">
      <div class="card-body">
        <h5 class="card-title"><?php echo $lihat['nama_brg']; ?></h5>
        <p class="card-text">Jenis Barang: <?php echo $lihat['jenis_brg']; ?></p>
        <p class="card-text">Stok: <?php echo $lihat['stok_brg']; ?></p>
        <div class="text-center">
          <a href="editbrg.php?id_brg=<?php echo $lihat['id_brg']; ?>" class="btn btn-primary">Edit</a>
          <a href="hapusbrg.php?id=<?php echo $lihat['id_brg']; ?>" class="btn btn-danger">Hapus</a>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
        </div>
      </div>
    </div>
  </div>
       

    <?php require_once "templates/footer.php" ?>

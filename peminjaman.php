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
          <h2 class="page-header">Peminjaman</h2>
          <hr>
          <a href="tambahpeminjaman.php" class="btn btn-danger float-right" style="margin-bottom: 20px;"><i class="fa fa-plus"></i>+ Tambah Peminjaman</a>
              <table id="tabelpeminjaman" class="table table-bordered  table-hover">
                     <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Barang</th>
                          <th>Nama Peminjam</th>
                          <th>Tanggal Pinjam</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                     </thead>
                     <?php
                     $sql = "SELECT peminjaman.id_peminjaman, peminjaman.status, peminjaman.id_anggota, peminjaman.tgl_pinjam, barang.nama_brg, anggota.nama FROM peminjaman JOIN barang ON peminjaman.id_brg=barang.id_brg JOIN anggota ON anggota.id_anggota=peminjaman.id_anggota ORDER BY peminjaman.id_peminjaman DESC";
                     $query = $mysqli->query($sql);
                     $no = 1;
                     while ($lihat=mysqli_fetch_array($query)){
                      ?>
                      <tbody>
                        <tr>
                         <td><?php echo $no++ ?></td>
                          <td><?php echo $lihat ['nama_brg']; ?></td>
                          <td><?php echo $lihat ['nama'];?></td>
                          <td><?php echo date('d-m-Y',strtotime($lihat['tgl_pinjam'])); ?></td>
                          <td><span class="btn btn-xs btn-<?php echo $lihat['status'] == 1 ? 'success' : 'danger' ?>"><?php echo $lihat['status'] == 1 ? 'Sudah Dikembalikan' : 'Belum Dikembalikan'; ?></span></td>
                          <td> <a href="editpeminjaman.php?id_peminjaman=<?php echo $lihat['id_peminjaman']; ?>" class="btn btn-danger">Edit</a>
                          <a href="hapuspeminjaman.php?id=<?php echo $lihat['id_peminjaman']; ?>" class="btn btn-danger">Hapus</a></td>


                        </tr>
                        <?php
                        } ?>
                        </tbody>
              </table>
        </div>


    <?php require_once "templates/footer.php" ?>


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
          <h2 class="page-header">Pengembalian</h2>
          <hr>
              <table id="tabelpengembalian" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Barang</th>
                          <th>Nama Peminjam</th>
                          <th>Tanggal Pinjam</th>
                          <th>Tanggal Kembali</th>
                          <th>Action</th>
                        </tr>
                     </thead>
                      <?php
                     $sql = "SELECT pengembalian.*,
                            barang.id_brg,
                            barang.nama_brg,
                            peminjaman.id_peminjaman,
                            peminjaman.tgl_pinjam,
                            peminjaman.status,
                            anggota.id_anggota,
                            anggota.nama
                            FROM pengembalian JOIN barang ON pengembalian.id_brg=barang.id_brg JOIN anggota ON pengembalian.id_anggota=anggota.id_anggota JOIN peminjaman ON
                            peminjaman.id_peminjaman=pengembalian.id_peminjaman WHERE peminjaman.status=1";
                     $query = $mysqli->query($sql);
                     $no = 1;
                     while ($lihat=mysqli_fetch_array($query)){
                      ?>
                       <tbody>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $lihat['nama_brg']; ?></td>
                          <td><?php echo $lihat['nama'];?></td>
                          <td><?php echo $lihat['tgl_pinjam']; ?></td>
                          <td><?php echo $lihat['tgl_kembali']; ?></td>
                          <td> <a href="editpengembalian.php?id_pengembalian=<?php echo $lihat['id']; ?>"
                           class="btn btn-primary">Edit</a>
                          <a href="hapuspengembalian.php?id=<?php echo $lihat['id']; ?>"
                           class="btn btn-danger">Hapus</a></td>


                        </tr>
                        <?php
                        } ?>
                        </tbody>
              </table>
        </div>
      </div>
    </div>

    <?php require_once "templates/footer.php" ?>

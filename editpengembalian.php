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
          <h1 class="page-header">Edit Pengembalian</h1>

              <section class="row">
                <!-- left column -->
                <div class="col-md-12">
                <!-- general form element -->
                <div class="box box-danger">
                <div class="box-header with-border">
                </div><!--/.box-header-->
                <?php
                  $id = $_GET['id_pengembalian'];
                  $query = $mysqli->query("SELECT pengembalian.*,
                            barang.id_brg,
                            barang.nama_brg,
                            peminjaman.id_peminjaman,
                            peminjaman.tgl_pinjam,
                            peminjaman.status,
                            anggota.id_anggota,
                            anggota.nama
                            FROM pengembalian JOIN barang
                            ON pengembalian.id_brg=barang.id_brg JOIN anggota
                            ON pengembalian.id_anggota=anggota.id_anggota JOIN peminjaman
                            ON peminjaman.id_peminjaman=pengembalian.id_peminjaman
                            WHERE pengembalian.id='$id'");
                  $qu = mysqli_fetch_array($query);
                    ?>
                  <!-- form start -->
                  <form role="form" action="proseseditpengembalian.php?id=<?= $id ?>" method="post">
                  <div class = "box-body">
                  <div class ="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" disable value="<?php echo $qu['id_peminjaman'] ?>" name="id" class="form-control" placeholder="" disabled>
                    <input type="hidden" value="<?= $qu['id_peminjaman']; ?>" name="id">
                    </div>
                    <div class ="form-group">
                    <label for="exampleInputPassword1">Nama Barang</label>
                    <input type="text" name="nama_brg" readonly="" class="form-control" disabled value="<?= $qu['nama_brg'] ?>">
                    </div>
                   <div class ="form-group">
                    <label for="exampleInputPassword1">Nama Peminjam</label>
                    <input type="text" name="nama" class="form-control" disabled value="<?= $qu['nama'] ?>" readonly>
                    </div>
                     <div class ="form-group">
                    <label for="exampleInputPassword1">Tanggal Pinjam</label>
                   <input type="date" disabled value="<?php echo date('Y-m-d', strtotime($qu['tgl_pinjam'])) ?>"  name="tgl_pinjam"
                    class="form-control datepicker" required readonly>
                    </div>
                    <div class="form-group">
                      <label>Tanggal Kembali</label>
                      <input type="date" name="tgl_kembali" class="form-control" value="<?= date('Y-m-d', strtotime($qu['tgl_kembali'])) ?>">
                    </div>


           <div class="box" style="margin-top: 20px; display: flex; justify-content: space-between;">
            <a href="pengembalian.php" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
           
           </div>
            </div>
            </form>
            </section><!-- /.content -->

          </div>
        </div>

    <?php require_once "templates/footer.php" ?>
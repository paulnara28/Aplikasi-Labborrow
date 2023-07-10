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
          <h1 class="page-header">Edit Anggota</h1>

              <section class="row">
                <!-- left column -->
                <div class="col-md-12">
                <!-- general form element -->
                <div class="box box-danger">
                <div class="box-header with-border">
                </div><!--/.box-header-->
                <?php
                  $id_peminjam = $_GET['id_peminjam'];
                  $query = $mysqli->query("SELECT * FROM anggota where id_anggota='$id_peminjam'");

                  while ($qu = mysqli_fetch_array($query)){
                    ?>
                  <!-- form start -->
                  <form role="form" action="proseseditpeminjam.php" method="post">
                  <div class = "box-body">
                  <div class ="form-group">
                    <label for="exampleInputEmail1">No</label>
                    <input type="text" disable value="<?php echo $qu['id_anggota'] ?>" name="id_peminjam" class="form-control" placeholder="" disabled>
                    <input type="hidden" value="<?= $qu['id_anggota']; ?>" name="id_peminjam">
                    </div>
                    <div class ="form-group">
                    <label for="exampleInputPassword1">Username </label>
                    <input type="text"  value="<?php echo$qu['nama'] ?>" name="username"
                    class="form-control" placeholder="" required>
                    </div>
                    <div class ="form-group">
                    <label for="exampleInputPassword1">Password </label>
                    <input type="password"  value="<?php echo$qu['password'] ?>" name="password"
                    class="form-control" placeholder="" required>
                    </div>
                    <div class ="form-group">
                      <label for="exampleInputPassword1">Kelas </label>
                      <input type="text" disabled value="<?php echo$qu['kelas'] ?>" name="kelas"
                      class="form-control" placeholder="" required>
                    </div>

                <?php
                }
            ?>

            <div class="box" style="margin-top: 20px; display: flex; justify-content: space-between;">
             <a href="peminjam.php" class="btn btn-danger">Back</a>
             <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

            </div>
            </form>
            </section><!-- /.content -->

          </div>
        </div>

    <?php require_once "templates/footer.php" ?>
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
    <a href="#">Dashboard</a>
    <a href="barang.php">Barang</a>
    <a href="peminjam.php">Anggota</a>
    <a href="peminjaman.php">Peminjaman</a>
    <a href="pengembalian.php">Pengembalian</a>
    </div>
  </div>

  <div class="content">
    <h2>Dashboard</h2>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="panel-body">
            <h2 class="text-center">Data Barang</h2>
            <hr>
          <div class="card-body d-flex justify-content-center align-items-center">
          <img src="databarang.png" style="display: flex; padding-top:10px">
          </div>
          <div class="text-center " style="padding-top: 10px;">
            <?php
            require 'config/koneksi.php';
            $query = $mysqli->query("SELECT count(id_brg) as a FROM barang");
            $data = mysqli_fetch_assoc($query);
            ?>
            <h2><?php echo $data['a']; ?> Barang</h2>
          </div>
          </div>
        </div>
      </div>
    </div>
    </body>
</html>
    <?php require_once "templates/footer.php" ?>
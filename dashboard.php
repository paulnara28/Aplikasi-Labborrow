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

    .sidebar {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background: linear-gradient(to right, #2691D9, #0F9CFC);
    display: flex;
    flex-direction: column;
    padding-top: 70px;
  }

  .sidebar a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 16px;
    color: white;
    display: block;
    margin-bottom: 10px;
  }

  .sidebar a:hover {
    background-color: #F5F5F5;
    color: black;
  }
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
  <div style="flex-grow: 1;"></div>
  <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <div class="content">
    
    <h2>Dashboard</h2>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="panel-body">
            <h2 class="text-center">Data Barang</h2>
            <hr>
          <div class="card-body d-flex justify-content-center align-items-center">
          <img src="./user/images/databarang.png" style="display: flex; padding-top:10px">
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
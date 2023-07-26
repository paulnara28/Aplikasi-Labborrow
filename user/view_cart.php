<?php require_once "config.inc.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="../bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" type="image/png" href="../images/logo1.png">
    <title>Lab Borrow</title>
</head>

<body>
<div class="container mt-4">

<h3>Keranjang Peminjam</h3>
                <form action="index.php" method="post" id="cart">
                    <a href="proses_pinjam.php?id_anggota=<?php echo $_SESSION['id_anggota']; ?>" class="btn btn-primary pull-right"><i class="fas fa-tasks"></i> Proses Pinjam</a><br><br>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Id Barang</th>
                          <th>Nama Barang</th>
                          <th>Foto</th>
                          <th>Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                      if (isset($_SESSION['items'])) {
                            foreach ($_SESSION['items'] as $key => $val){
                                $query = $mysqli->query("SELECT barang.id_brg, barang.nama_brg, barang.foto FROM barang WHERE barang.id_brg = '$key'");
                                $rs = mysqli_fetch_array($query);

                      ?>
                      <tr>
                        <td><?php echo $rs['id_brg']; ?></td>
                        <td><?php echo $rs['nama_brg']; ?></td>
                        <td><img src="../<?php echo $rs['foto']; ?>" width="50" height="50" alt=""></td>
                        <td><a href="cartfunction.php?act=del&amp;id_product=<?php echo $key; ?>&amp;ref=view_cart.php"><i class="fa fa-trash"></i></a></td>
                      </tr>
                      <?php
                                mysqli_free_result($query);
                            }
                      }
                      ?>
      
                      </tbody>
                    </table>
                    <button type="submit" class="btn btn-danger">Kembali</button>
                  </form>
            </div>

<!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/dist/js/jquery.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
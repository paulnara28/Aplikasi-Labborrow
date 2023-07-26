<?php
    require_once("config.inc.php");
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lab Borrow</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="icon" type="image/png" href="../images/logo1.png">
</head>
<body>


		<div class="container">
			<div class="row" style="margin-top: 50px">
				<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>Pendataan Barang</h4>
						<hr>
					</div>
					<div class="panel-body">
					<form action="proses_transaksi.php?id_anggota=<?php echo $_SESSION['id_anggota']; ?>" method="post">
						<div class="form-group mt-3">
							<label for="">Nama :</label>
							<input type="text" name="nama" class="form-control mt-2" disabled value="<?php echo $_SESSION['anggota']; ?>">
							<input type="hidden" name="nama" class="form-control" value="<?php echo $_SESSION['anggota']; ?>">
						</div>
<?php
$anggota = $_SESSION['id_anggota'];
$query = $mysqli->query("SELECT * FROM anggota WHERE id_anggota = '$anggota'");
	while ($data = mysqli_fetch_assoc($query)) {
?>
<input type="hidden" name="id_anggota" value="<?php echo $data['id_anggota']; ?>">
	<?php	}
 ?>

						<div class="form-group mt-3">
						<?php
						date_default_timezone_set('Asia/Jakarta');
						$date = date('d' . '-' . 'F' . '-' . 'Y');
						 ?>
							<label for="">Tanggal Pinjam :</label>
							<input type="text" disabled name="tgl_pinjam" class="datepicker form-control mt-2" value="<?php echo $date; ?>">
							<input type="hidden" name="tgl_pinjam" class="datepicker form-control" value="<?php echo $date; ?>">

						</div>

						<button type="submit" name="finish" class="btn btn-block btn-primary mt-4"><i class="fas fa-cog"></i> Proses</button>
					</div>
				</div>
				</div>
				<div class="col-md-6 ">
					<h3>Barang</h3>
					<?php

							  if (isset($_SESSION['items'])) {
							        foreach ($_SESSION['items'] as $key => $val){
							            $query = $mysqli->query("SELECT * FROM barang WHERE barang.id_brg = '$key'");
							            $rs = mysqli_fetch_array($query);
							  ?>
						<img src="../<?php echo $rs['foto']; ?>" class="thumbnail" width="100" height="100" alt="">
						<h3><?php echo $rs['nama_brg']; ?></h3>
						<input type="hidden" name="id_brg" value="<?php echo $val; ?>" class="form-control">
					<?php
					            mysqli_free_result($query);
					        }
					 	 }
					  ?>
				</div>
					</form>
			</div>
	</div>
	 <script src="bootstrap/dist/js/jquery.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
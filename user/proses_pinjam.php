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
	<title>Proses Pinjam</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
</head>
<body>


		<div class="container">
			<div class="row" style="margin-top: 50px">
				<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>Pendataan Barang</h4>
					</div>
					<div class="panel-body">
					<form action="proses_transaksi.php?id_anggota=<?php echo $_SESSION['id_anggota']; ?>" method="post">
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" name="nama" class="form-control" disabled value="<?php echo $_SESSION['anggota']; ?>">
							<input type="hidden" name="nama" class="form-control" value="<?php echo $_SESSION['anggota']; ?>">
						</div>
<?php
$anggota = $_SESSION['id_anggota'];
$query = $mysqli->query("SELECT * FROM anggota WHERE id_anggota = '$anggota'");
	while ($data = mysqli_fetch_assoc($query)) {
?>


<input type="hidden" name="id_anggota" value="<?php echo $data['id_anggota']; ?>">
<label for="">Kelas</label>
        	<div class="form-group">
      		<input type="text" name="kelas" value="<?php echo $data['kelas']; ?>" disabled class="form-control">
      		<input type="hidden" name="kelas" value="<?php echo $data['kelas']; ?>" class="form-control">
        	</div>
	<?php	}
 ?>

						<div class="form-group">
						<?php
						date_default_timezone_set('Asia/Jakarta');
						$date = date('d' . '-' . 'F' . '-' . 'Y');
						 ?>
							<label for="">Tgl Pinjam</label>
							<input type="text" disabled name="tgl_pinjam" class="datepicker form-control" value="<?php echo $date; ?>">
							<input type="hidden" name="tgl_pinjam" class="datepicker form-control" value="<?php echo $date; ?>">

						</div>

						<button type="submit" name="finish" class="btn btn-block btn-primary">Proses</button>
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

<?php
require_once "../config/koneksi.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Selesai</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
	<!-- Start: Wrapper -->
	<div id="wrapper">
		<!-- Start: Container -->
		<div class="container">
			<!-- Start: Card -->
			<div class="card">
				<div class="card-body">
					<div class="title">
						<h3>Peminjaman Selesai</h3>
					</div>
					<div class="card-text">
						<h3>Selamat Anda Telah Berhasil Checkout</h3>
					</div>
					<div class="card-text">
						<?php
						if (isset($_POST['finish'])) {
							echo '<h4>Terima kasih Anda Sudah Meminjam Barang di Lab.</h4>';
							echo '<p>Nama  : ' . $_POST['nama'] . '<br>';
							echo '<p>Kelas : ' . $_POST['kelas'] . '<br>';
							echo '<p>Tanggal Pinjam : ' . $_POST['tgl_pinjam'] . '<br>';
							$nama = $_POST['nama'];
							$kelas = $_POST['kelas'];
							$tgl = $_POST['tgl_pinjam'];
							$item = $_SESSION['items'];
							$id_anggota = $_SESSION['id_anggota'];

							foreach ($item as $key => $value) {
								$d = $mysqli->query("INSERT INTO peminjaman(id_brg, id_anggota, tgl_pinjam) VALUES (  			
										 '$key',
											'$id_anggota',
											'$tgl'
											)") or die(mysqli_error());
							}
						}
						session_destroy();
						echo '<a href="javascript:window.print()"><h3>Cetak</h3></a></font>';
						echo "<a href='logout.php'>Logout</a>";
						?>
					</div>
				</div>
			</div>
			<!-- End: Card -->
		</div>
		<!-- End: Container -->
	</div>
	<!-- End: Wrapper -->
</body>
</html>

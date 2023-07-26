<?php
require_once "../config/koneksi.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="../images/logo1.png">
	<title>Lab Borrow</title>
</head>
<style>
		/* CSS untuk menempatkan card di tengah halaman */
		html, body {
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		#wrapper {
			width: 100%;
			max-width: 600px; /* Sesuaikan lebar card */
		}
	</style>

<body>
	<!-- Start: Wrapper -->
	<div id="wrapper">
		<!-- Start: Container -->
		<div class="container ">
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
							echo '<h4>Terima kasih Anda Sudah Meminjam Barang di Lab Borrow.</h4>';
							echo '<p>Nama  : ' . $_POST['nama'] . '<br>';
							echo '<p>Tanggal Pinjam : ' . $_POST['tgl_pinjam'] . '<br>';
							$nama = $_POST['nama'];
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
						echo '<style>
						@media print {
						  .print-link {
							display: none;
						  }
						}
						</style>';
						echo '<a href="javascript:window.print()" class="print-link"><h3>Cetak</h3></a>';
						?>
						<a href="logout.php" class="print-link">Logout</a>
						

						
						
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

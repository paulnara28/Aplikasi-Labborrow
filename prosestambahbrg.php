<?php
include 'config/koneksi.php';

$namafolder = "upload/"; //tempat menyimpan file

$id_brg = $_POST['id_brg'];
$nama_brg = $_POST['nama_brg'];
$jenis_brg = $_POST['jenis_brg'];
$stok_brg = $_POST['stok_brg'];
$foto = $_FILES['foto']['name'];

if (isset($_POST['tambah'])) {
    $dir = "images/";
    $fileName = $dir . basename($_FILES['foto']['name']);

    // Simpan di Folder Gambar
    move_uploaded_file($_FILES['foto']['tmp_name'], $fileName);

    $query = $mysqli->query("INSERT INTO barang (id_brg, nama_brg, jenis_brg, stok_brg, foto) VALUES ('$id_brg', '$nama_brg', '$jenis_brg', '$stok_brg', '$fileName')");

    if ($query) {
        header("location: barang.php");
    } else {
        echo "gagal menambah data";
    }
}
?>

<?php 
session_start();
include 'koneksi.php';

if (isset($_POST['tambah'])) {
	$nama_album = $_POST['namaalbum'];
	$deskripsi = $_POST['deskripsi'];
	$tanggal = date('Y-m-d');
	$user_id = $_SESSION['userid'];

	$sql = mysqli_query($koneksi, "INSERT INTO album VALUES('','$nama_album','$deskripsi','$tanggal','$user_id')");

	echo "<script>
	alert('Data Berhasil Disimpan!');
	location.href='../admin/album.php';
	</script>";
}


if (isset($_POST['edit'])) {
	$album_id = $_POST['albumid'];
	$nama_album = $_POST['namaalbum'];
	$deskripsi = $_POST['deskripsi'];
	$tanggal = date('Y-m-d');
	$user_id = $_SESSION['userid'];

	$sql = mysqli_query($koneksi, "UPDATE album SET nama_album='$nama_album', deskripsi='$deskripsi', tanggal_buat='$tanggal' WHERE album_id='$album_id'");

	echo "<script>
	alert('Data Berhasil Diperbarui!');
	location.href='../admin/album.php';
	</script>";
}

if (isset($_POST['hapus'])) {
	$album_id = $_POST['albumid'];

	$sql = mysqli_query($koneksi, "DELETE FROM album WHERE album_id='$album_id'");

	echo "<script>
	alert('Data Berhasil Dihapus!');
	location.href='../admin/album.php';
	</script>";
}

?>
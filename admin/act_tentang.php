<?php
include '../config/koneksi.php';
$isi = $_POST['isi'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
	header("location:tentang.php?alert=gagal_ekstensi");
} else {
	if ($ukuran < 90000000) {
		$xx = $rand . '_' . $filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
		mysqli_query($koneksi, "INSERT INTO tentang VALUES(NULL,'$isi','$xx')");
		header("location:tentang.php?alert=berhasil");
	} else {
		header("location:tentang.php?alert=gagak_ukuran");
	}
}

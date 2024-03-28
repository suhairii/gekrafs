<?php
include '../config/koneksi.php';
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$hashtag = $_POST['hashtag'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
	header("location:tentang.php?alert=gagal_ekstensi");
} else {
	if ($ukuran < 1044070) {
		$xx = $rand . '_' . $filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
		mysqli_query($koneksi, "INSERT INTO banner VALUES(NULL,'$judul','$isi','$hashtag','$xx')");
		header("location:tentang.php?alert=berhasil");
	} else {
		header("location:tentang.php?alert=gagak_ukuran");
	}
}

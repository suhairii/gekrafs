<?php
include '../config/koneksi.php';
$judul = $_POST['judul'];
$desa = $_POST['desa'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
	header("location:ekraf.php?alert=gagal_ekstensi");
} else {
	if ($ukuran < 90000000) {
		$xx = $rand . '_' . $filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
		mysqli_query($koneksi, "INSERT INTO ekraf VALUES(NULL,'$judul','$xx','$desa')");
		header("location:ekraf.php?alert=berhasil");
	} else {
		header("location:ekraf.php?alert=gagak_ukuran");
	}
}

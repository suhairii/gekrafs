<?php
include '../config/koneksi.php';
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$sumber = $_POST['sumber'];
$lokasi = $_POST['lokasi'];
$isi = $_POST['isi'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:berita.php?alert=gagal_ekstensi");
} else {
    if ($ukuran < 90000000) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
        mysqli_query($koneksi, "INSERT INTO berita VALUES(NULL,'$judul','$tanggal','$xx','$sumber','$lokasi','$isi')");
        header("location:berita.php?alert=berhasil");
    } else {
        header("location:berita.php?alert=gagal_ukuran");
    }
}

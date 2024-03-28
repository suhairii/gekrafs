<?php
include '../config/koneksi.php';
$nama = $_POST['nama'];
$gambar = $_POST['gambar'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:kolaborasi.php?alert=gagal_ekstensi");
} else {
    if ($ukuran < 1044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
        mysqli_query($koneksi, "INSERT INTO kolaborasi VALUES(NULL,'$nama','$xx')");
        header("location:kolaborasi.php?alert=berhasil");
    } else {
        header("location:kolaborasi.php?alert=gagal_ukuran");
    }
}

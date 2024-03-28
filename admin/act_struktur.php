<?php
include '../config/koneksi.php';
$bidang = $_POST['bidang'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:struktur.php?alert=gagal_ekstensi");
} else {
    if ($ukuran < 1044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
        mysqli_query($koneksi, "INSERT INTO struktur VALUES(NULL,'$bidang','$nama','$jabatan','$xx')");
        header("location:struktur.php?alert=berhasil");
    } else {
        header("location:struktur.php?alert=gagak_ukuran");
    }
}

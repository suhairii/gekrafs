<?php
include '../config/koneksi.php';
$judul = $_POST['judul'];
$tgl = $_POST['tgl'];
$lokasi = $_POST['lokasi'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:trabas.php?alert=gagal_ekstensi");
} else {
    if ($ukuran < 90000000) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
        mysqli_query($koneksi, "INSERT INTO trabas VALUES(NULL,'$judul','$tgl','$lokasi','$xx')");
        header("location:trabas.php?alert=berhasil");
    } else {
        header("location:trabas.php?alert=gagak_ukuran");
    }
}

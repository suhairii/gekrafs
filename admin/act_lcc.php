<?php
include '../config/koneksi.php';
$nama = $_POST['nama'];
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
        mysqli_query($koneksi, "INSERT INTO lcc VALUES(NULL,'$nama','$isi','$xx')");
        header("location:lcc.php?alert=berhasil");
    } else {
        header("location:lcc.php?alert=gagal_ukuran");
    }
}

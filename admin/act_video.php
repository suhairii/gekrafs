<?php
include '../config/koneksi.php';
// $judul = $_POST['judul'];
// $tanggal = $_POST['tanggal'];
// $tentang = $_POST['tentang'];

// $rand = rand();
// $ekstensi =  array('mp4', 'avi', 'flv', 'wmv', 'mov', 'mp4');
// $filename = $_FILES['video']['name'];
// $ukuran = $_FILES['video']['size'];
// $ext = pathinfo($filename, PATHINFO_EXTENSION);

// if (!in_array($ext, $ekstensi)) {
//     header("location:video.php?alert=gagal_ekstensi");
// } else {
//     if ($ukuran < 90000000) {
//         $xx = $rand . '_' . $filename;
//         move_uploaded_file($_FILES['video']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
//         mysqli_query($koneksi, "INSERT INTO video VALUES(NULL,'$judul','$tanggal','$xx','$tentang')");
//         header("location:video.php?alert=berhasil");
//     } else {
//         header("location:video.php?alert=gagal_ukuran");
//     }
// }

$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$tentang = $_POST['tentang'];

$rand = rand();
$ekstensi = array('mp4', 'avi', 'flv', 'wmv', 'mov', 'mp4');
$filename = $_FILES['video']['name'];
$ukuran = $_FILES['video']['size'];
$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

if (!in_array($ext, $ekstensi)) {
    header("location:tambah_video.php?alert=gagal_ekstensi");
    exit(); // Hentikan eksekusi skrip
}

if (!file_exists('gambar/')) {
    mkdir('gambar/'); // Buat direktori jika belum ada
}

if ($ukuran < 90000000) {
    $xx = $rand . '_' . $filename;
    if (move_uploaded_file($_FILES['video']['tmp_name'], 'gambar/' . $rand . '_' . $filename)) {
        mysqli_query($koneksi, "INSERT INTO video VALUES(NULL,'$judul','$tanggal','$xx','$tentang')");
        header("location:video.php?alert=berhasil");
    } else {
        header("location:tambah_video.php?alert=gagal_upload");
    }
} else {
    header("location:tambah_video.php?alert=gagal_ukuran");
}
?>

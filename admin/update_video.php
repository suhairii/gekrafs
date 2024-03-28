<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../config/koneksi.php';

// membuat variabel untuk menampung data dari form
$id = $_POST['id_video'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$video = $_FILES['video']['name'];
$tentang = $_POST['tentang'];


//cek dulu jika merubah gambar produk jalankan coding ini
if ($video != "") {
    $ekstensi_diperbolehkan = array('mp4', 'avi', 'flv', 'wmv', 'mov', 'mp4'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $video); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['video']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_video_baru = $angka_acak . '-' . $video; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'gambar/' . $nama_video_baru); //memindah file gambar ke folder gambar

        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $query  = "UPDATE video SET judul = '$judul', tanggal = '$tanggal', video = '$nama_video_baru', tentang = '$tentang'";
        $query .= "WHERE id_video = '$id'";
        $result = mysqli_query($koneksi, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        } else {
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Data berhasil diubah.');window.location='video.php';</script>";
        }
    } else {
        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='edit_video.php';</script>";
    }
} else {
    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "UPDATE video SET judul = '$judul', tanggal = '$tanggal', tentang = '$tentang'";
    $query .= "WHERE id_video = '$id'";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil diubah.');window.location='video.php';</script>";
    }
}

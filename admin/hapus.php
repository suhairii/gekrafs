<?php
// koneksi database
include '../config/koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id_struktur'];

// Hapus Struktur
mysqli_query($koneksi, "delete from struktur where id_struktur='$id'");

// mengalihkan halaman kembali ke index.php




// Hapus banner
$id = $_GET['id_berita'];

// menghapus data dari database
mysqli_query($koneksi, "delete from berita where id_berita='$id'");

// mengalihkan halaman kembali ke index.php


// Hapus banner
$id = $_GET['id_kolaborasi'];

// menghapus data dari database
mysqli_query($koneksi, "delete from kolaborasi where id_kolaborasi='$id'");

// mengalihkan halaman kembali ke index.php



// Hapus Banner
$id = $_GET['id_banner'];

// menghapus data dari database
mysqli_query($koneksi, "delete from banner where id_banner='$id'");

// mengalihkan halaman kembali ke index.php



// Hapus video
$id = $_GET['id_video'];

// menghapus data dari database
mysqli_query($koneksi, "delete from video where id_video='$id'");

// mengalihkan halaman kembali ke index.php



// Hapus community
$id = $_GET['id_community'];

// menghapus data dari database
mysqli_query($koneksi, "delete from community where id_community='$id'");

// mengalihkan halaman kembali ke index.php



// Hapus tentang
$id = $_GET['id_tentang'];

// menghapus data dari database
mysqli_query($koneksi, "delete from tentang where id_tentang='$id'");

// mengalihkan halaman kembali ke index.php



// Hapus edukasi
$id = $_GET['id_edukasi'];

// menghapus data dari database
mysqli_query($koneksi, "delete from edukasi where id_edukasi='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

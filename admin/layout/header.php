<!DOCTYPE html>
<html>

<head>
  <title>Login Admin</title>
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


  <?php
  session_start();
  if ($_SESSION['status'] != "login") {
    header("location:../index.php?pesan=belum_login");
  }
  ?>

  <nav class="navbar navbar-expand-lg navbar-light bg-primary" style="background-color: #e3f2fd;">
    <div class="container">
      <a class="navbar-brand text-white fw-bold" href="#">Gekrafs Bengkalis</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="banner.php">Banner</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="berita.php">Berita</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Tentang Gekrafs
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="struktur.php">Struktur Organisasi</a>
              <a class="dropdown-item" href="tentang.php">Tentang Kami</a>
              <a class="dropdown-item" href="kolaborasi.php">Kolaborasi</a>
              <a class="dropdown-item" href="lcc.php">LCC</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Program
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="community.php">Community Space</a>
              <a class="dropdown-item" href="edukasi.php">Edukasi</a>
              <a class="dropdown-item" href="trabas.php">Trabas</a>
              <a class="dropdown-item" href="pariwisata.php">Pariwisata</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Potensi
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="ekraf.php">Ekonomi Kreatif</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="video.php">Video</a>
          </li>
        </ul>
        <a type="button" class="btn btn-light nav-link active fw-bold text-danger" aria-current="page" href="logout.php">Logout</a>
      </div>
    </div>
  </nav>
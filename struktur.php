<?php
include 'layout/header.php';
?>

<main id="main">

  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <span>Struktur Organisasi</span>
        <h2>Struktur Organisasi</h2>
      </div>


      <div class="row mb-5">
        <h5 class="fw-bold mb-5">Dewan Pimpinan Gekrafs Cabang Kabupaten Bengkalis</h5>
        <?php
        include 'config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from struktur where bidang ='Dewan Pimpinan Gekrafs Cabang Kabupaten'");
        while ($d = mysqli_fetch_array($data)) {
        ?>

          <div class="col-lg-2 col-md-3 mb-4" data-aos="200">
            <!-- <div class="icon-box"> -->
              <img src="admin/gambar/<?php echo $d['foto'] ?>" class="mb-3" alt="Deskripsi Gambar" width="130" height="130">
              <h5 class="fw-bold"> <?php echo $d['nama']; ?></h5>
              <p> <?php echo $d['jabatan']; ?></p>
              </a>
            <!-- </div> -->
          </div>

        <?php
        }

        ?>
      </div>

      <div class="row mb-5">
        <h5 class="fw-bold mb-5">Bidang 1 Program & Strategi</h5>
        <?php
        include 'config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from struktur where bidang ='Bidang 1 Program & Strategi'");
        while ($d = mysqli_fetch_array($data)) {
        ?>

          <div class="col-lg-2 col-md-3 mb-4" data-aos="200">
            <!-- <div class="icon-box"> -->
              <img src="admin/gambar/<?php echo $d['foto'] ?>" class="mb-3" alt="Deskripsi Gambar" width="130" height="130">
              <h5 class="fw-bold"> <?php echo $d['nama']; ?></h5>
              <p> <?php echo $d['jabatan']; ?></p>
              </a>
            <!-- </div> -->
          </div>

        <?php
        }

        ?>
      </div>

      <div class="row mb-5">
        <h5 class="fw-bold mb-5">Bidang 2 Pengembangan Talenta</h5>
        <?php
        include 'config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from struktur where bidang ='Bidang 2 Pengembangan Talenta'");
        while ($d = mysqli_fetch_array($data)) {
        ?>

          <div class="col-lg-2 col-md-3 mb-4" data-aos="200">
            <!-- <div class="icon-box"> -->
              <img src="admin/gambar/<?php echo $d['foto'] ?>" class="mb-3" alt="Deskripsi Gambar" width="130" height="130">
              <h5 class="fw-bold"> <?php echo $d['nama']; ?></h5>
              <p> <?php echo $d['jabatan']; ?></p>
              </a>
            <!-- </div> -->
          </div>

        <?php
        }

        ?>
      </div>

      <div class="row mb-5">
        <h5 class="fw-bold mb-5">Bidang 3 Pemasaran, Media & Kerjasama</h5>
        <?php
        include 'config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from struktur where bidang ='Bidang 3 Pemasaran, Media & Kerjasama'");
        while ($d = mysqli_fetch_array($data)) {
        ?>

          <div class="col-lg-2 col-md-3 mb-4" data-aos="200">
            <!-- <div class="icon-box"> -->
              <img src="admin/gambar/<?php echo $d['foto'] ?>" class="mb-3" alt="Deskripsi Gambar" width="130" height="130">
              <h5 class="fw-bold"> <?php echo $d['nama']; ?></h5>
              <p> <?php echo $d['jabatan']; ?></p>
              </a>
            <!-- </div> -->
          </div>

        <?php
        }

        ?>
      </div>

      <div class="row mb-5">
        <h5 class="fw-bold mb-5">Bidang 4 HAKI, Hukum & Advokasi</h5>
        <?php
        include 'config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from struktur where bidang ='Bidang 4 HAKI, Hukum & Advokasi'");
        while ($d = mysqli_fetch_array($data)) {
        ?>

          <div class="col-lg-2 col-md-3 mb-4" data-aos="200">
            <!-- <div class="icon-box"> -->
              <img src="admin/gambar/<?php echo $d['foto'] ?>" class="mb-3" alt="Deskripsi Gambar" width="130" height="130">
              <h5 class="fw-bold"> <?php echo $d['nama']; ?></h5>
              <p> <?php echo $d['jabatan']; ?></p>
              </a>
            <!-- </div> -->
          </div>

        <?php
        }

        ?>
      </div>

      <div class="row mb-5">
        <h5 class="fw-bold mb-5">Bidang 5 Event & Sosialisasi Program</h5>
        <?php
        include 'config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from struktur where bidang ='Bidang 5 Event & Sosialisasi Program'");
        while ($d = mysqli_fetch_array($data)) {
        ?>

          <div class="col-lg-2 col-md-3 mb-4" data-aos="200">
            <!-- <div class="icon-box"> -->
              <img src="admin/gambar/<?php echo $d['foto'] ?>" class="mb-3" alt="Deskripsi Gambar" width="130" height="130">
              <h5 class="fw-bold"> <?php echo $d['nama']; ?></h5>
              <p> <?php echo $d['jabatan']; ?></p>
              </a>
            <!-- </div> -->
          </div>

        <?php
        }

        ?>
      </div>

      <div class="row mb-5">
        <h5 class="fw-bold mb-5">Bidang 6 HAKI, Hukum & Advokasi</h5>
        <?php
        include 'config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from struktur where bidang ='Bidang 6 HAKI, Hukum & Advokasi'");
        while ($d = mysqli_fetch_array($data)) {
        ?>

          <div class="col-lg-2 col-md-3 mb-4" data-aos="200">
            <!-- <div class="icon-box"> -->
              <img src="admin/gambar/<?php echo $d['foto'] ?>" class="mb-3" alt="Deskripsi Gambar" width="130" height="130">
              <h5 class="fw-bold"> <?php echo $d['nama']; ?></h5>
              <p> <?php echo $d['jabatan']; ?></p>
              </a>
            <!-- </div> -->
          </div>

        <?php
        }

        ?>
      </div>

      <div class="row mb-5">
        <h5 class="fw-bold mb-5">Bidang 7 Pembinaan Potensi Ekonomi Kreatif</h5>
        <?php
        include 'config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from struktur where bidang ='Bidang 7 Pembinaan Potensi Ekonomi Kreatif'");
        while ($d = mysqli_fetch_array($data)) {
        ?>

          <div class="col-lg-2 col-md-3 mb-4" data-aos="200">
            <!-- <div class="icon-box"> -->
              <img src="admin/gambar/<?php echo $d['foto'] ?>" class="mb-3" alt="Deskripsi Gambar" width="130" height="130">
              <h5 class="fw-bold"> <?php echo $d['nama']; ?></h5>
              <p> <?php echo $d['jabatan']; ?></p>
              </a>
            <!-- </div> -->
          </div>

        <?php
        }

        ?>
      </div>

      <div class="row mb-5">
        <h5 class="fw-bold mb-5">Bidang 8 Riset Pelestarian Budaya Tradisi Nusantara</h5>
        <?php
        include 'config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from struktur where bidang ='Bidang 8 Riset Pelestarian Budaya Tradisi Nusantara'");
        while ($d = mysqli_fetch_array($data)) {
        ?>

          <div class="col-lg-2 col-md-3 mb-4" data-aos="200">
            <!-- <div class="icon-box"> -->
              <img src="admin/gambar/<?php echo $d['foto'] ?>" class="mb-3" alt="Deskripsi Gambar" width="130" height="130">
              <h5 class="fw-bold"> <?php echo $d['nama']; ?></h5>
              <p> <?php echo $d['jabatan']; ?></p>
              </a>
            <!-- </div> -->
          </div>

        <?php
        }

        ?>
      </div>
  </section>


</main><!-- End #main -->

<?php
include 'layout/footer.php';
?>
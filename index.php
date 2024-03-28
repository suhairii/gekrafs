<?php
include 'layout/header.php'
?>
<?php include 'config/koneksi.php'; ?>
<?php
$data = mysqli_query($koneksi, "select * from banner");
while ($d = mysqli_fetch_array($data)) {
?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background: url('admin/gambar/<?php echo $d['foto'] ?>') top center;width: 100%;
  height: calc(100vh - 110px);background-size: cover;
  position: relative;">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <div class="row text-center">
        <div class="col">
          <img src="assets/img/gekrafs.png" alt="" class="mb-5" style="width:150px">
          <img src="assets/img/pesona_indonesia.png" alt="" class="mb-5" style="width:250px">
        </div>
      </div>
      <h1><?php echo $d['judul'] ?></h1>
      <h2><?php echo $d['isi'] ?></h2>
      <small class="btn-get-started scrollto"><?php echo $d['hashtag'] ?></small>
    </div>
  </section>
  <!-- End Hero -->
<?php
}
?>


<main id="main">
  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">
      <div class="section-title">
        <span>Berita Terkini</span>
        <h2>Berita Terkini</h2>
      </div>

      <div class="row">
        <?php
        include 'config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from berita");
        while ($d = mysqli_fetch_array($data)) {
        ?>

          <div class="col col-lg-4 col-md-6 mb-4">
            <div class="card" style="border:none;">
              <a href="detailberita.php?id_berita=<?php echo $d['id_berita']; ?>">
                <img src="admin/gambar/<?php echo $d['foto'] ?>" class="mb-3 rounded-5" style="width: 100;" alt="Deskripsi Gambar" width="300" height="200">
                <div class="card-img-overlay">
                </div>
                <p class="fw-bold text-dark" style="text-align: left;"> <?php echo $d['judul']; ?></p>
                <p class="text-dark" style="text-align: left;"> <?php echo $d['tanggal']; ?></p>
              </a>
            </div>
          </div>

        <?php
        }

        ?>
      </div>
  </section>
  <!-- End Services Section -->

  <!-- ======= Kolaborasi Section ======= -->
  <section id="services" class="services">
    <div class="container">
      <div class="section-title">
        <span>Kolaboraksi</span>
        <h2 class="mb-5">Kolaboraksi</h2>
      </div>

      <div class="row">
        <?php
        include 'config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM kolaborasi");
        while ($d = mysqli_fetch_array($data)) {
        ?>

          <div class="col col-lg-4 col-md-6 mb-4">
            <div class="card" style="border:none;">
              <img src="admin/gambar/<?php echo $d['gambar'] ?>" class="mb-3 rounded-5" alt="Deskripsi Gambar" width="200">
              <div class="card-img-overlay">
              </div>
            </div>
          </div>

        <?php
        }

        ?>
      </div>
    </div>


    </div>
    </div>
  </section>
  <!-- End Kolaborasi Section -->

  <!-- ======= Video Section ======= -->
  <section id="services" class="services">
    <div class="container">
      <div class="section-title">
        <span>Video Galeri</span>
        <h2>Video Galeri</h2>
      </div>
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php
        include 'config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from video");
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <div class="col col-lg-4 col-md-6 mb-4">
            <div class="card" style="border:none;">
              <video src="admin/gambar/<?php echo $d['video'] ?>" class="mb-3 rounded-5" style="width: 100;" alt="Deskripsi Gambar"></video>
              <a href="detailvideo.php?id_video=<?php echo $d['id_video']; ?>">
                <div class="card-img-overlay">
                  <h4 class="card-title fw-bold text-white"><?php echo $d['judul']; ?></h4>
                </div>
              </a>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  <!-- End Vido Section -->

  <?php
  include 'layout/footer.php'
  ?>
<?php
include 'layout/header.php';
?>
<?php include 'config/koneksi.php'; ?>
<main id="main">

  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <span>Trabas Ekrafs</span>
        <h2>Trabas Ekrafs</h2>
      </div>


      <div class="row">
        <?php
        include 'config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from trabas");
        while ($d = mysqli_fetch_array($data)) {
        ?>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="200">
            <div class="icon-box">
              <img src="admin/gambar/<?php echo $d['foto'] ?>" class="mb-3" alt="Deskripsi Gambar" width="300" height="200">
              <h5 class="fw-bold" style="text-align: left;"> <?php echo $d['judul']; ?></h5>
              <p class="" style="text-align: left;"> <?php echo $d['tgl']; ?></p>
              <p class="" style="text-align: left;">Lokasi : <?php echo $d['lokasi']; ?></p>
              </a>
            </div>
          </div>

        <?php
        }

        ?>
      </div>
    </div>

  </section>


</main><!-- End #main -->

<?php
include 'layout/footer.php';
?>
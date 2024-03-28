<?php
include 'layout/header.php';
?>
<?php include 'config/koneksi.php'; ?>
<main id="main">
  <section id="services" class="services">
    <div class="container">
      <div class="section-title">
        <span>Community Space</span>
        <h2>Community Space</h2>
      </div>
      <div class="row">
        <?php
        include 'config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from community");
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <!-- style="text-align: left;" -->
          <!-- <div class="col-lg-12 col-md-6 mb-4" data-aos="200"> -->
          <!-- <div class="icon-box"> -->
          <div class="container text-center">
            <img src="admin/gambar/<?php echo $d['foto'] ?>" class="mb-3" alt="Deskripsi Gambar" width="1000" height="auto">
          </div>
          <h5 class="fw-bold"> <?php echo $d['judul']; ?></h5>
          <p><?php echo $d['isi']; ?></p>
          <!-- </div> -->
          <!-- </div> -->
        <?php
        }

        ?>
      </div>
    </div>
  </section>
</main>
<!-- End #main -->

<?php
include 'layout/footer.php';
?>
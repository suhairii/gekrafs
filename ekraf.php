<?php
include 'layout/header.php';
?>
<?php include 'config/koneksi.php'; ?>
<main id="main">
  <section id="services" class="services">
    <div class="container">
      <div class="section-title">
        <span>Ekonomi Kreatif</span>
        <h2>Ekonomi Kreatif</h2>
      </div>
      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
        <?php
        include 'config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM ekraf");
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-info">
                <img src="admin/gambar/<?php echo $d['foto'] ?>" class="mb-3 img-fluid" alt="Deskripsi Gambar" width="1000" height="auto">
                <h5 class="fw-bold"> <?php echo $d['judul']; ?></h5>
                <p class=""> <?php echo $d['desa']; ?></p>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  <!-- <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-title">
        <span>Ekonomi Kreatif</span>
        <h2>Ekonomi Kreatif</h2>
        <p>Ekonomi Kreatif Yang ada di Desa Pangkalan Batang</p>
      </div>
      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
          </ul>
        </div>
      </div>
      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/portfolio/portfolio-11.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Tanjak</h4>
            <p>tanjak lokal</p>
            <a href="assets/img/portfolio/portfolio-11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="assets/img/portfolio/portfolio-12.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Piring Lidi Rotan</h4>
            <p>Kerajinan Tangan</p>
            <a href="assets/img/portfolio/portfolio-12.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/portfolio/a.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Tenun</h4>
            <p>Tenun Baju,Songket,dll.</p>
            <a href="assets/img/portfolio/a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Card 2</h4>
            <p>Card</p>
            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 2</h4>
            <p>Web</p>
            <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 3</h4>
            <p>App</p>
            <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Card 1</h4>
            <p>Card</p>
            <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Card 3</h4>
            <p>Card</p>
            <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section> -->
</main>
<?php
include 'layout/footer.php';
?>
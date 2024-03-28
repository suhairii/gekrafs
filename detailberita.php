<?php
include 'layout/header.php'
?>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <!-- Page Content-->
        <section class="py-5">
            <div class="container px-5">
                <div class="row">
                    <div class="col">
                        <!-- Post content-->
                        <article>

                            <?php
                            include 'config/koneksi.php';
                            $no = 1;
                            $id = $_GET['id_berita'];
                            $data = mysqli_query($koneksi, "select * from berita where id_berita='$id'");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <!-- Post header-->
                                <header class="mb-4">
                                    <!-- Post title-->
                                    <h1 class="fw-bolder mb-1"><?php echo $d['judul']; ?></h1>
                                    <!-- Post meta content-->
                                    <div class="text-muted fst-italic mb-2"><?php echo $d['tanggal']; ?></div>

                                </header>
                                <!-- Preview image figure-->
                                <figure class="justify-content-center" align="center"><img class="img-fluid rounded" src="admin/gambar/<?php echo $d['foto'] ?>" alt="align-items-center" style="width: 1000px;" /></figure>
                                <!-- Post content-->
                                <p>
                                    <center class="mb-4">
                                        <span style="font-size: 12pt;"><i><small>Sumber Foto : <?php echo $d['sumber']; ?></small></i>
                                    </center>

                                <p><strong><span style="font-size: 13pt;"><?php echo $d['lokasi']; ?>,</span></strong>
                                    <span style="font-size: 13pt;">&nbsp; <?php echo $d['isi']; ?></span>
                                </p>

                            <?php
                            }

                            ?>
                        </article>
        </section>
    </div>
</section>


<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <span>Berita Lainnya</span>
            <h2>Berita Lainnya</h2>
        </div>

        <div class="row">
            <?php
            include 'config/koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from berita");
            while ($d = mysqli_fetch_array($data)) {
            ?>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="200">
                    <div class="icon-box">
                        <h4><a href="detailberita.php?id_berita=<?php echo $d['id_berita']; ?>"></h4>
                        <img src="admin/gambar/<?php echo $d['foto'] ?>" alt="Deskripsi Gambar" width="300" height="200">
                        <p class="fw-bold" style="text-align: left;"> <?php echo $d['judul']; ?></p>
                        </a>
                    </div>
                </div>

            <?php
            }

            ?>
        </div>
</section><!-- End Services Section -->

<?php
include 'layout/footer.php'
?>
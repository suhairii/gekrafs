<?php
include 'layout/header.php'
?>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <!-- Page Content-->
        <div class="container px-5">
            <div class="row">
                <div class="col">
                    <!-- Post content-->
                    <?php
                    include 'config/koneksi.php';
                    $no = 1;
                    $id = $_GET['id_video'];
                    $data = mysqli_query($koneksi, "select * from video where id_video='$id'");
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
                        <figure class="justify-content-center" align="center">
                            <!-- <div class="container"> -->
                            <video alt="align-items-center" style="width: 1000px;" controls>
                                <source src="admin/gambar/<?php echo $d['video'] ?>">
                            </video>
                            <!-- </div> -->
                        </figure>
                        <!-- Post content-->
                        <p>
                            <center class="mb-4">
                                <span style="font-size: 15pt;"><i><small>Tentang : <?php echo $d['tentang']; ?></small></i>
                            </center>
                        <?php
                    }

                        ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="services" class="services">
    <div class="container px-5">

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
</section><!-- End Services Section -->

<?php
include 'layout/footer.php'
?>
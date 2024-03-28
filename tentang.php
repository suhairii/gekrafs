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
                            $data = mysqli_query($koneksi, "select * from tentang");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <!-- Preview image figure-->
                                <figure class="justify-content-center" align="center"><img class="img-fluid rounded" src="admin/gambar/<?php echo $d['foto'] ?>" alt="align-items-center" style="width: 1000px;" /></figure>
                                <!-- Post content-->
                                <span style="font-size: 13pt;">&nbsp; <?php echo $d['isi']; ?></span>
                                </p>

                            <?php
                            }

                            ?>
                        </article>
        </section>
    </div>
</section>



<?php
include 'layout/footer.php'
?>
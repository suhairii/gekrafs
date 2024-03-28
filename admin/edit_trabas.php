<?php
include 'layout/header.php'
?>

<br><br>

<div class="container px-5">
    <h2 class="text-center mb-3">Edit Trabas</h2>
    <?php
    include '../config/koneksi.php';
    $id = $_GET['id_trabas'];
    $data = mysqli_query($koneksi, "select * from trabas where id_trabas='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form action="update_trabas.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="hidden" name="id_trabas" value="<?php echo $d['id_trabas']; ?>">
                <label for="exampleInputEmail1" class="form-label">Judul</label>
                <input type="text" value="<?php echo $d['judul']; ?>" name="judul" class="form-control bg-light">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                <input type="text" value="<?php echo $d['tgl']; ?>" name="tgl" class="form-control bg-light">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Lokasi</label>
                <input type="text" value="<?php echo $d['lokasi']; ?>" name="lokasi" class="form-control bg-light">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto Lama</label>
                <img class="mb-3" src="gambar/<?php echo $d['foto'] ?>" width="130" height="70">
                <input class="form-control bg-light" value="<?php echo $d['foto']; ?>" name="foto" type="hidden" id="formFile">
                <input class="form-control bg-light" value="<?php echo $d['foto']; ?>" name="foto" type="file" id="formFile">
            </div>

            <div class="mb-3">
                <button type="submit" class="form-control btn btn-primary">Submit</button>
            </div>
        </form>
    <?php
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</body>

</html>
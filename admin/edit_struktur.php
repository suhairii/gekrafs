<?php
include 'layout/header.php'
?>

<br><br>

<div class="container px-5">
    <h2 class="text-center mb-3">Edit Struktur</h2>
    <?php
    include '../config/koneksi.php';
    $id = $_GET['id_struktur'];
    $data = mysqli_query($koneksi, "select * from struktur where id_struktur='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form action="update_struktur.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="hidden" name="id_struktur" value="<?php echo $d['id_struktur']; ?>">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" value="<?php echo $d['nama']; ?>" name="nama" class="form-control bg-light">
            </div>
            <div class="mb-3">
                <label for="validationCustom03" class="form-label">Bidang</label>
                <select class="form-select" name="bidang" aria-label="Default select example">
                    <option selected disabled>-- <?php echo $d['bidang']; ?> --</option>
                    <option value="Dewan Pimpinan Gekrafs Cabang Kabupaten">Dewan Pimpinan Gekrafs Cabang Kabupaten</option>
                    <option value="Bidang 1 Program & Strategi">Bidang 1 Program & Strategi</option>
                    <option value="Bidang 2 Pengembangan Talenta">Bidang 2 Pengembangan Talenta</option>
                    <option value="Bidang 3 Pemasaran, Media & Kerjasama">Bidang 3 Pemasaran, Media & Kerjasama</option>
                    <option value="Bidang 4 HAKI, Hukum & Advokasi">Bidang 4 HAKI, Hukum & Advokasi</option>
                    <option value="Bidang 5 Event & Sosialisasi Program">Bidang 5 Event & Sosialisasi Program</option>
                    <option value="Bidang 6 HAKI, Hukum & Advokasi">Bidang 6 HAKI, Hukum & Advokasi</option>
                    <option value="Bidang 7 Pembinaan Potensi Ekonomi Kreatif">Bidang 7 Pembinaan Potensi Ekonomi Kreatif</option>
                    <option value="Bidang 8 Riset Pelestarian Budaya Tradisi Nusantara">Bidang 8 Riset Pelestarian Budaya Tradisi Nusantara</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                <input type="text" value="<?php echo $d['jabatan']; ?>" name="jabatan" class="form-control bg-light">
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
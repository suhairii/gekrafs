<?php
include 'layout/header.php'
?>

<br><br>
<div class="container">
    <h2 class="text-center mb-3">Tambah Struktur</h2>
    <div class="card-body justify-content-center">
        <form action="act_struktur.php" method="POST" enctype="multipart/form-data" style="align-items: center;">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control bg-light" id="exampleInputEmail1" aria-describedby="emailHelp">
                <input type="hidden" class="form-control" name="id_struktur" required="required"></input>
            </div>
            <div class="mb-3">
                <label for="validationCustom03" class="form-label">Bidang</label>
                <select class="form-select" name="bidang" aria-label="Default select example">
                    <option selected disabled>-- Pilih Bidang --</option>
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
                <label for="exampleInputPassword1" class="form-label">Jabatan</label>
                <input type="text" name="jabatan" class="form-control bg-light" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control bg-light" name="foto" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <button type="submit" class="form-control btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</body>

</html>
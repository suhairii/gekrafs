<?php
include 'layout/header.php'
?>

<br><br>
<div class="container">
    <h2 class="text-center mb-3">Tambah Trabas</h2>
    <div class="card-body justify-content-center">
        <form action="act_trabas.php" method="POST" enctype="multipart/form-data" style="align-items: center;">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control bg-light" id="exampleInputEmail1" aria-describedby="emailHelp">
                <input type="hidden" class="form-control" name="id_trabas" required="required"></input>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                <input type="date" name="tgl" class="form-control bg-light" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Lokasi</label>
                <input type="text" name="lokasi" class="form-control bg-light" id="exampleInputPassword1">
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
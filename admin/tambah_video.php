<?php
include '../config/koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Gekrafs Bengkalis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="layout/ckeditor/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
        /* The heart of the matter */

        .horizontal-scrollable>.table {
            overflow-x: auto;
            white-space: nowrap;
        }

        .horizontal-scrollable>.table> {
            display: inline-block;
            float: none;
        }
    </style>
</head>

<body>

    <?php
    include 'layout/header.php';
    ?>

    <br><br>

    <div class="container">
        <h2 class="text-center mb-3">Tambah Video</h2>
        <form action="act_video.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control bg-light" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control bg-light" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Video</label>
                <input class="form-control bg-light" name="video" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tentang</label>
                <input type="text" name="tentang" class="form-control bg-light" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <button type="submit" class="form-control btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</body>

</html>

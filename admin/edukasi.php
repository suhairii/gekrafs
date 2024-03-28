<?php
include 'layout/header.php';
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

    <div class="container">
        <br>
        <?php
        if (isset($_GET['alert'])) {
            if ($_GET['alert'] == 'gagal_ekstensi') {
        ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
                    Ekstensi Tidak Diperbolehkan
                </div>
            <?php
            } elseif ($_GET['alert'] == "gagal_ukuran") {
            ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Peringatan !</h4>
                    Ukuran File terlalu Besar
                </div>
            <?php
            } elseif ($_GET['alert'] == "berhasil") {
            ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Sukses</h4>
                    Berhasil Disimpan
                </div>
        <?php
            }
        }
        ?>
        <br>
        <a href="tambah_edukasi.php" class="btn btn-info btn-sm">Tambah Data</a>
        <br>
        <br>
        <table class="table table-bordered horizontal-scrollable">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
            <?php
            include '../config/koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from edukasi");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['jabatan']; ?></td>
                    <td><img src="gambar/<?php echo $d['foto'] ?>" class="img-fluid" alt="Responsive image" width="35" height="40"></td>
                    <td>
                        <a href="edit_edukasi.php?id_edukasi=<?php echo $d['id_edukasi']; ?>"><span class="badge text-bg-primary">Edit</span></a>
                        <a href="hapus.php?id_edukasi=<?php echo $d['id_edukasi']; ?>"><span class="badge text-bg-danger">Hapus</span></a>
                    </td>
                </tr>
            <?php
            }

            ?>
        </table>
    </div>
</body>

</html>
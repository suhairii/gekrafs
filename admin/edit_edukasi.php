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
	include 'layout/header.php'
	?>

	<br>
	<div class="container px-5">
		<h2 class="text-center mb-3">Edit Edukasi</h2>
		<?php
		include '../config/koneksi.php';
		$id = $_GET['id_edukasi'];
		$data = mysqli_query($koneksi, "select * from edukasi where id_edukasi='$id'");
		while ($d = mysqli_fetch_array($data)) {
		?>
			<form action="update_edukasi.php" method="POST" enctype="multipart/form-data">
				<div class="mb-3">
					<input type="hidden" name="id_edukasi" value="<?php echo $d['id_edukasi']; ?>">
					<label for="exampleInputEmail1" class="form-label">Nama</label>
					<input type="text" value="<?php echo $d['nama']; ?>" name="nama" class="form-control bg-light">
				</div>
				<div class="mb-3">
					<label for="formFile" class="form-label">Foto Lama</label>
					<img class="mb-3" src="gambar/<?php echo $d['foto'] ?>" width="130" height="70">
					<input class="form-control bg-light" value="<?php echo $d['foto']; ?>" name="foto" type="hidden" id="formFile">
					<input class="form-control bg-light" value="<?php echo $d['foto']; ?>" name="foto" type="file" id="formFile">
				</div>
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Jabatan</label>
					<input type="text" value="<?php echo $d['jabatan']; ?>" name="jabatan" class="form-control bg-light">
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
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
	<br><br>
	<div class="container">
		<h2 class="text-center mb-3">Tambah ekraf</h2>
		<form action="act_ekraf.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" class="form-control" name="id_ekraf" required="required"></input>
			<div class="mb-3">
				<label for="foto" class="form-label">Foto</label>
				<input class="form-control bg-light" name="foto" type="file" id="foto">
			</div>
			<div class="mb-3">
				<label for="judul" class="form-label">Judul</label>
				<input type="text" class="form-control ckeditor" name="judul" id="judul"></input>
			</div>
			<div class="mb-3">
				<label for="desa" class="form-label">Desa</label>
				<input type="text" class="form-control ckeditor" name="desa" id="desa"></input>
			</div>
			<div class="mb-3">
				<button type="submit" class="form-control btn btn-primary">Submit</button>
			</div>
		</form>
	</div>

	<br><br>
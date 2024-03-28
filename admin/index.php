<?php
include 'layout/header.php'
?>

<!DOCTYPE html>

<html>

<head>
	<title>Gekrafs Bengkalis</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
		<div class="bg-green" style="width:100%; color: #0000FF">
			<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

			<br />
			<br />
		</div>
	</div>

</body>

</html>
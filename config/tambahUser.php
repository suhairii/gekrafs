<!DOCTYPE html>
<html>
<head>
	<title>Create admin</title>
</head>
<body>
 
	<h2>CRUD DATA ADMIN</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH ADMIN</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
            <th>NO</th>
			<th>ID</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from admin");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_user']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id_user']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id_user']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
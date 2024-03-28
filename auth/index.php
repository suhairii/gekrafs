<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	<div class="container">
      <br>
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card my-5">

          <div class="card-body p-3">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">           
                <div class="p-3">
                  <div class="row">
                    <div class="col">
                      <h4 class="text-center fw-bold">Masuk</h4>
                    </div>
                  </div>
                  <br>
                  <?php 
                  if(isset($_GET['pesan'])){
                    if($_GET['pesan']=="gagal"){
                      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                      <strong>Username/Password Tidak Sesuai!</strong>
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                    }
                  }
                  ?>
                  
                  <form action="ceklogin.php" method="post">
                    <div class="mb-3">
                      <label for="formGroupExampleInput" class="form-label text-secondary"><span style="font-size: 12px;">Username</span></label>
                      <input type="text" name="username" class="form-control" required id="formGroupExampleInput" style="box-shadow: none; border-color: red">
                    </div>
                    <div class="mb-3">
                      <label for="formGroupExampleInput" class="form-label text-secondary"><span style="font-size: 12px;">Kata sandi</span></label>
                      <input type="password" name="password" class="form-control" required id="formGroupExampleInput" style="box-shadow: none; border-color: red">
                    </div>
                    <br>
                    <div class="mb-3 d-grid gap-2">
                      <button type="submit" class="btn" style="background-color: red; "><span style="color: #0000FF">Masuk</span></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
		
</body>
</html>
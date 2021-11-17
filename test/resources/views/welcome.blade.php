
<?php
// include_once "function/helper.php";
// include_once "function/koneksi.php";
// include_once "module/masuk/action.php";
// if (isset($_POST["submit"])) {
// 	tambah($_POST);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Halaman Utama</title>
	</head>
	<body>
		<!--  -->
		<div id="pebungkus">
			<div class="card shadow">
				<h4 class="card-header">Kendaraan Masuk</h4>
				<div class="container">
					<form action="" method="post">
						<span>
							<br><label>Jenis Kendaraan</label><br>
							
							<input type="text" class="form-control" name="nomor_polisi"  autocomplete="off">
						</span><br>
						<span>
							<label>Nomor Polisi</label><br>
							<input type="text" class="form-control" name="nomor_polisi"  autocomplete="off">
                        </span><br>
                        <span>
							<label>Tanggal</label><br>
							<input type="date" class="form-control" name="tgl"  autocomplete="off">
						</span><br>
						<span>
							<button type="submit" name="submit" class="btn btn-primary" >Tambah</button>
						</span>
					</form>
				</div>
			</div>
		</div>
	</body>

</html>

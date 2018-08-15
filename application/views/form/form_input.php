<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mahasiswa</title>
    <?php $this->load->view('partial/header'); ?>
</head>
<body>
	<h2 class="text-center">INPUT DATA MAHASISWA</h2><br>
	<div class="container">
	<fieldset class="btn-success">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4"><br><br>
	<form action="<?php echo base_url(); ?>data/action_add" method="post">
		<label for="nim">NIM</label><br>
		<input class="form-control" type="text" name="nim" placeholder="masukan nim"><br>

		<label for="nama">NAMA</label><br>
		<input class="form-control" type="text" name="nama" placeholder="masukan nama"><br>

		<label for="">ALAMAT</label><br>
		<textarea class="form-control" name="alamat" name="alamat" cols="30" rows="4" placeholder="masukan alamat"></textarea><br>

		<label for="jurusan">JURUSAN</label><br>
		<input class="form-control" type="text" name="jurusan" placeholder="masukan jurusan"><br><br>

		<input class="btn btn-primary" type="submit" name="save" value="save">
	</form><br><br>

	</div>
	</div>
	</fieldset>
	</div>
</body>
</html>
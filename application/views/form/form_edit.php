<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mahasiswa</title>
    <?php $this->load->view('partial/header'); ?>
</head>
<body>
	<h2 class="text-center">INOUT DATA MAHASISWA</h2><br>
	<div class="container">
		<fieldset class="btn-success">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
	<?php foreach ($content->result() as $key):  ?>
	<form action="<?php echo base_url(); ?>data/action_update/<?php echo $key->nim ?>" method="post"><br><br>
	
		<label for="nama">NAMA</label><br>
		<input class="form-control" type="text" name="nama" placeholder="masukan nama" value="<?php echo $key->nama ?>"><br>

		<label for="">ALAMAT</label><br>
		<textarea class="form-control" name="alamat" name="alamat" cols="30" rows="4" placeholder="masukan alamat"><?php echo $key->alamat ?></textarea><br>

		<label for="jurusan">JURUSAN</label><br>
		<input class="form-control" type="text" name="jurusan" placeholder="masukan jurusan" value="<?php echo $key->jurusan ?>"><br><br>

		<input class="btn btn-primary" type="submit" name="save" value="save">
	</form><br><br>
	<?php endforeach ?>
	</div>
	</div>
	</fieldset>
	</div>
</body>
</html>
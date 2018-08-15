<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>
    <?php $this->load->view('partial/header'); ?>
</head>
<body>
	<h2 class="text-center">EDIT DATA</h2><br><br>

	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
	<?php foreach ($content->result() as $key): ?>
	<form action="<?php echo base_url(); ?>crud/action_update/<?php echo $key->id ?>" method="post">

		<label for="nama">NAMA DOSEN</label><br>
		<input class="form-control" type="text" name="nama_dosen" placeholder="nama dosen" value="<?php echo $key->nama_dosen ?>"><br><br>

		<!-- <label for="status">STATUS</label><br>
		<input type="text" name="status" placeholder="status" value="<?php echo $key->status ?>"><br><br>

		<label for="jurusan">JURUSAN</label><br>
		<input type="text" name="jurusan" placeholder="jurusan" value="<?php echo $key->jurusan ?>"><br><br> -->

		<input class="btn btn-primary" type="submit" name="save" value="save">
	</form>
	<?php endforeach ?>
	</div>
	</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jadwal</title>
    <?php $this->load->view('partial/header'); ?>
</head>
<body>
	<h2 class="text-center">EDIT DATA</h2><br><br>

	<div class="container">
		<fieldset class="btn-success">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
	<?php foreach ($content->result() as $key ):  ?>
	<form action="<?php echo base_url() ?>jadwal/action_update/<?php echo $key->no ?>" method="post"><br><br>

		<label for="hari">HARI</label><br>
		<input class="form-control" type="text" name="hari" placeholder="hari" value="<?php echo $key->hari ?>"><br>
		
		<label for="jam">JAM</label><br>
		<input class="form-control" type="text" name="jam" placeholder="jam" value="<?php echo $key->jam ?>"><br>
		
		<label for="matakuliah">MATAKULIAH</label><br>
		<input class="form-control" type="text" name="matakuliah" placeholder="matakuliah" value="<?php echo $key->matakuliah ?>"><br>
		
		<label for="dosen_pengajar">DOSEN PENGAJAR</label><br>
		<input class="form-control" type="text" name="dosen_pengajar" placeholder="dosen pengajar" value="<?php echo $key->dosen_pengajar ?>"><br><br>
		
		<input class="btn btn-primary" type="submit" name="save" value="save">
		
	</form><br><br>
<?php endforeach ?>
</div>
</div>
</fieldset>
</div>

</body>
</html>
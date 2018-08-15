<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jadwal</title>
    <?php $this->load->view('partial/header'); ?>
</head>
<body>
	<h2 class="text-center">INPUT DATA</h2><br>

	<div class="container">
		<fieldset class="btn-success">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
	<form action="<?php echo base_url() ?>jadwal/action_add" method="post"><br><br>
		<label for="no">NO</label><br>
		<input class="form-control" type="text" name="no" placeholder="no"><br>

		<label for="hari">HARI</label><br>
		<input class="form-control" type="text" name="hari" placeholder="hari"><br>
		
		<label for="jam">JAM</label><br>
		<input class="form-control" type="text" name="jam" placeholder="jam"><br>
		
		<label for="matakuliah">MATAKULIAH</label><br>
		<input class="form-control" type="text" name="matakuliah" placeholder="matakuliah"><br>
		
		<label for="dosen_pengajar">DOSEN PENGAJAR</label><br>
		<select name="dosen" class="form-control">
		<option >Pilih</option>
		<?php foreach ($dosen as $key):  ?>
		<option value="<?php echo $key->id ?>"><?php echo $key->nama_dosen ?></option>
		<?php endforeach ?>
		</select><br>

		<input class="btn btn-primary" type="submit" name="save" value="save">
		<a class="btn btn-primary" href="<?php echo base_url() ?>jadwal">BACK</a>		
		
	</form><br><br>
	</div>
	</div>
	</fieldset>
	</div>

</body>
</html>
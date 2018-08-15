<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>
	<?php $this->load->view('partial/header'); ?>
</head>
<body>
	<h2 class="text-center">INPUT DATA</h2>
	<div class="container">
				<fieldset class="btn-success">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
					<form action="<?php echo base_url(); ?>dosen/action_add" method="post"><br>
						<label for="id">ID</label><br>
						<input class="form-control" type="text" name="id" placeholder="id"><br><br>

						<label for="nama">NAMA DOSE</label><br>
							<input class="form-control" type="text" name="nama_dosen" placeholder="nama"><br><br>

						<!-- <label for="status">STATUS</label><br>
						<input class="form-control" type="text" name="status" placeholder="status"><br><br>

						<label for="jurusan">JURUSAN</label><br>
						<input class="form-control" type="text" name="jurusan" placeholder="jurusan"><br><br> -->

						<input class="btn btn-primary" type="submit" name="save" value="save">
						<a class="btn btn-primary" href="<?php echo base_url() ?>dosen">BACK</a><br><br><br>
					</form>
			</div>
		</div>
			</fieldset>
	</div>
</body>
</html>
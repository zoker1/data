<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mahasiswa</title>
    <?php $this->load->view('partial/header'); ?>
</head>
<body>
	<h2>DATA MAHASISWA</h2>
	<!-- data(mama controler)/add(nama function)  -->
	<a class="btn btn-primary" href="<?php echo base_url(); ?>mahasiswa/form_input_mahasiswa">INPUT DATA</a>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th>NIM</th>
				<th>NAMA</th>
				<th>ALAMAT</th>
				<th>JURUSAN</th>
				<th class="text-center">AKSI</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($content->result() as $key): ?>	
			<tr>
				<td><?php echo $key->nim ?></td>
				<td><?php echo $key->nama ?></td>
				<td><?php echo $key->alamat ?></td>
				<td><?php echo $key->jurusan ?></td>
				<td align="center">
				<a class="btn btn-success" href="<?php echo base_url(); ?>mahasiswa/update/<?php echo $key->nim ?>">..Edit..</a> ||
				<a class="btn btn-danger" href="<?php echo base_url(); ?>mahasiswa/delete/<?php echo $key->nim ?>">Delete</a>
				</td>
			</tr>
		<?php endforeach ?>	
		</tbody>
	</table>
	<a class="btn btn-primary" href="<?php echo base_url() ?>beranda">BACK</a>
</body>
</html>
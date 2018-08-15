<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jadwal</title>
    <?php $this->load->view('partial/header'); ?>
</head>
<body>
	<h2>JADWAL</h2>
	<a class="btn btn-primary" href="<?php echo base_url() ?>jadwal/add">INPUT DATA</a>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
			<th>NO</th>
			<th>HARI</th>
			<th>JAM</th>
			<th>MATAKULIAH</th>
			<th>DOSEN PENGAJAR</th>
			<th class="text-center">AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($content->result() as $key):  ?>
			<tr>
				<td><?php echo $key->no ?></td>
				<td><?php echo $key->hari ?></td>
				<td><?php echo $key->jam ?></td>
				<td><?php echo $key->matakuliah ?></td>
				<td><?php echo $key->dosen_pengajar ?></td>
				<td class="text-center">
				<a class="btn btn-success" href="<?php echo base_url(); ?>jadwal/update/<?php echo $key->no ?>">..Edit..</a> ||
				<a class="btn btn-danger" href="<?php echo base_url(); ?>jadwal/delete/<?php echo $key->no ?>">Delete</a>
				</td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<a class="btn btn-primary" href="<?php echo base_url() ?>beranda">BACK</a>
</body>
</html>
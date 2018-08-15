<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>
    <?php $this->load->view('partial/header'); ?>
</head>
<body>
	<h2>TABEL DATA</h2>
	<a class="btn btn-primary" href="<?php echo base_url(); ?>crud/add">Create</a>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th>ID</th>
				<th>NAMA</th>
				<!-- <th>STATUS</th>
				<th>JURUSAN</th> -->
				<th class="text-center">AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($content->result() as $key): ?>
			<tr>
				<td><?php echo $key->id ?></td>
				<td><?php echo $key->nama_dosen ?></td>
				<!-- <td><?php echo $key->status ?></td>
				<td><?php echo $key->jurusan ?></td> -->
				<td align="center">
				<a class="btn btn-success" href="<?php echo base_url(); ?>crud/read/<?php echo $key->id ?>">Read</a> ||
				<a class="btn btn-success" href="<?php echo base_url(); ?>crud/update/<?php echo $key->id ?>">Edit</a> ||
				<a class="btn btn-danger" href="<?php echo base_url(); ?>crud/delete/<?php echo $key->id ?>">Delete</a>
				</td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<a class="btn btn-primary" href="<?php echo base_url() ?>beranda">BACK</a>
</body>
</html>
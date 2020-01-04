<h3 style="text-align: center; border-radius: 20px;"> <?php echo "$sub_judul"; ?> </h3>
<hr>

<a href=" <?php echo site_url('administrator/pengguna/add/'); ?>" class="btn btn-success">Tambah Data</a>

<br><br>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Email</th>
			<th>Password</th>
			<th>Aksi</th>
		</tr>
	</thead>

	<tbody>

		<?php 
			$no=1;
			foreach ($data_pengguna as $isi) :
		 ?>

		<tr>
			<td> <?= $no++; ?> </td>
			<td> <?php echo $isi->email; ?> </td>
			<td> <?php echo $isi->password; ?></td>
			<td>
				<a href=" <?php echo site_url('administrator/pengguna/edit/'. $isi->kode); ?> ">Edit</a>
				<a href=" <?php echo site_url('administrator/pengguna/delete/'. $isi->kode); ?> ">Delete</a>
			</td>
		</tr>

		<?php 
			endforeach;
		 ?>
	</tbody>
</table>
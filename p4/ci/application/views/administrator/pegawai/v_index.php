<h3 style="text-align: center; border-radius: 20px;"> <?php echo "$sub_judul"; ?> </h3>
<hr>

<a href=" <?php echo site_url('administrator/pegawai/add/'); ?>" class="btn btn-success">Tambah Data</a>

<br><br>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nip</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jabatan</th>
			<th>Aksi</th>
		</tr>
	</thead>

	<tbody>

		<?php 
			$no=1;
			foreach ($data_pegawai as $isi) :
		 ?>

		<tr>
			<td> <?= $no++; ?> </td>
			<td> <?php echo $isi->nip; ?> </td>
			<td> <?php echo $isi->nama; ?> </td>
			<td> <?php echo $isi->alamat; ?></td>
			<td> <?php echo $isi->jabatan; ?> </td>
			<td>
				<a href=" <?php echo site_url('administrator/pegawai/edit/'. $isi->id); ?> ">Edit</a>
				<a href=" <?php echo site_url('administrator/pegawai/delete/'. $isi->id); ?> ">Delete</a>
			</td>
		</tr>

		<?php 
			endforeach;
		 ?>
	</tbody>
</table>
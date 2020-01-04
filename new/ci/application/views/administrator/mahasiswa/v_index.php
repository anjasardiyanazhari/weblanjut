<h3 style="text-align: center; border-radius: 20px;"> <?php echo "$sub_judul"; ?> </h3>
<hr>

<?php 
	if ($this->session->flashdata('msg')) {
	 	echo "<div class='alert-info alert'>" . $this->session->flashdata('msg'). "</div>";
	} 
 ?>

<?php 
	if ($this->session->userdata('status') == 'admin'): 
 ?>

	<a class="btn btn-success" href=" <?php echo site_url('administrator/ControllerB/add/'); ?>">Tambah Data</a>

<?php endif; ?>

<br><br>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Umur</th>
			<th>Aksi</th>
		</tr>
	</thead>

	<tbody>

		<?php 
			$no=1;
			foreach ($data_mahasiswa as $isi) :
		 ?>

		<tr>
			<td> <?= $no++; ?> </td>
			<td> <?php echo $isi->b_nim; ?> </td>
			<td> <?php echo $isi->b_nama; ?> </td>
			<td> <?php echo $isi->b_umur; ?></td>
			<td>
				<a href=" <?php echo site_url('administrator/ControllerB/edit/'. $isi->id_004); ?> ">Edit</a>
				<a onclick="return confirm('Yakin mau menghapus?')" href=" <?php echo site_url('administrator/ControllerB/delete/'. $isi->id_004); ?> ">Delete</a>
			</td>
		</tr>

		<?php 
			endforeach;
		 ?>
	</tbody>
</table>
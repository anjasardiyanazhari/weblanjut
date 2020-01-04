<h3 style="text-align: center; border-radius: 20px;"> <?php echo "$sub_judul"; ?> </h3>
<hr>


	<!-- untuk falidasi di form -->
	<?php echo validation_errors(); ?>
<form action=" <?php echo site_url('administrator/pegawai/proses_edit') ?> " method="post">
	<div class="form-group">
		<label for="nip">Nip</label>
		<input type="hidden" name="id" value="<?php echo $isi_form->id; ?>">
		<input type="text" class="form-control" name="nip" id="nip" value="<?php echo $isi_form->nip ?>">
	</div>

	<div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $isi_form->nama ?>">
	</div>

	<div class="form-group">
		<label for="alamat">Alamat</label>
		<textarea type="text" class="form-control" name="alamat" id="alamat"><?php echo $isi_form->alamat; ?></textarea>
	</div>

	<div class="form-group">
		<label for="jabatan">Jabatan</label>
		<input type="text" class="form-control" name="jabatan" id="jabatan" value="<?php echo $isi_form->jabatan ?>">
	</div>
		<div class="form-group">
		<button class="btn btn-success" type="submit"> 
			Kirim
		</button>
	</div>
	

</form>
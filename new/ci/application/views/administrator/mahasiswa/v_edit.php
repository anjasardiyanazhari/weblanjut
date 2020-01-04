<h3 style="text-align: center; border-radius: 20px;"> <?php echo "$sub_judul"; ?> </h3>
<hr>


	<!-- untuk falidasi di form -->
	<?php echo validation_errors(); ?>
<form action=" <?php echo site_url('administrator/ControllerB/proses_edit') ?> " method="post">
	<div class="form-group">
		<label for="nip">Nim</label>
		<input type="hidden" name="id_004" value="<?php echo $isi_form->id_004; ?>">
		<input type="text" class="form-control" name="b_nim" id="b_nim" value="<?php echo $isi_form->b_nim ?>">
	</div>

	<div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" class="form-control" name="b_nama" id="b_nama" value="<?php echo $isi_form->b_nama ?>">
	</div>

	<div class="form-group">
		<label for="nama">Umur</label>
		<input type="number" class="form-control" name="b_umur" id="b_umur" value="<?php echo $isi_form->b_umur ?>">
	</div>
		<div class="form-group">
		<button class="btn btn-success" type="submit"> 
			Kirim
		</button>
	</div>
	

</form>
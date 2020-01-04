<h3 style="text-align: center; border-radius: 20px;"> <?php echo "$sub_judul"; ?> </h3>
<hr>


	<!-- untuk falidasi di form -->
	<?php echo validation_errors(); ?>
<form action=" <?php echo site_url('administrator/ControllerB/proses_simpan') ?> " method="post">
	<div class="form-group">
		<label for="nip">Nim</label>
		<input type="text" 
			class="form-control <?= (form_error('b_nim')) ? 'is-invalid' : ''; ?>"
			name="b_nim" id="b_nim" value="<?php echo set_value('b_nim') ?>">

		<div class="invalid-feedback">
			<?= form_error('nip') ?>
		</div>
	</div>

	<div class="form-group">
		<label for="jabatan">Nama</label>
		<input type="text" class="form-control" name="b_nama" id="b_nama" value="<?php echo set_value('b_nama'); ?>">
		<small style="color: red"> <?php echo form_error('b_nama'); ?> </small>
	</div>


	<div class="form-group">
		<label for="jabatan">Umur</label>
		<input type="number" class="form-control" name="b_umur" id="b_umur" value="<?php echo set_value('b_umur'); ?>">
		<small style="color: red"> <?php echo form_error('b_umur'); ?> </small>
	</div>
		<div class="form-group">
		<button class="btn btn-success" type="submit"> 
			Kirim
		</button>
	</div>
	
</form>
<h3 style="text-align: center; border-radius: 20px;"> <?php echo "$sub_judul"; ?> </h3>
<hr>


<!-- untuk falidasi di form -->
<?php echo validation_errors(); ?>
<form action=" <?php echo site_url('administrator/pegawai/proses_simpan') ?> " method="post">
	<div class="form-group">
		<label for="nip">Nip</label>
		<input type="text" class="form-control <?= (form_error('nip')) ? 'is-invalid' : ''; ?>" name="nip" id="nip" value="<?php echo set_value('nip') ?>">

		<div class="invalid-feedback">
			<?= form_error('nip') ?>
		</div>
	</div>

	<div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" class="form-control" name="nama" id="nama" value="<?php echo set_value('nama'); ?>">
		<small style="color: red"> <?php echo form_error('nama'); ?> </small>
	</div>

	<div class="form-group">
		<label for="alamat">Alamat</label>
		<textarea type="text" class="form-control" name="alamat" id="alamat"><?php echo set_value('alamat'); ?></textarea>
		<small style="color: red"> <?php echo form_error('alamat'); ?> </small>
	</div>

	<div class="form-group">
		<label for="jabatan">Jabatan</label>
		<input type="text" class="form-control" name="jabatan" id="jabatan" value="<?php echo set_value('jabatan'); ?>">
		<small style="color: red"> <?php echo form_error('jabatan'); ?> </small>
	</div>
	<div class="form-group">
		<button class="btn btn-success" type="submit">
			Kirim
		</button>
	</div>

</form>
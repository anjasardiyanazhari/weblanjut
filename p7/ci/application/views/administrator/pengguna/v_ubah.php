<h3 style="text-align: center; border-radius: 20px;"> <?php echo "$sub_judul"; ?> </h3>
<hr>

<form action=" <?php echo site_url('administrator/pengguna/proses_edit') ?> " method="post">
	<div class="form-group">
		<label for="email">Email</label>
		<input type="hidden" name="kode" value="<?php echo $isi_form->kode; ?>">
		<input type="text" class="form-control" name="email" id="email" value="<?php echo $isi_form->email ?>">
	</div>

	<div class="form-group">
		<label for="password">Password</label>
		<input type="text" class="form-control" name="password" id="password" value="<?php echo $isi_form->password ?>">
	</div>

		<div class="form-group">
		<button class="btn btn-success" type="submit"> 
			Kirim
		</button>
	</div>
	
</form>
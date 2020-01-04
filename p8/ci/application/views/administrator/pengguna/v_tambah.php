<h3 style="text-align: center; border-radius: 20px;"> <?php echo "$sub_judul"; ?> </h3>
<hr>

<form action=" <?php echo site_url('administrator/pengguna/proses_simpan') ?> " method="post">
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" class="form-control" name="email" id="email">
	</div>

	<div class="form-group">
		<label for="password">Password</label>
		<textarea type="text" class="form-control" name="password" id="password"></textarea>
	</div>

		<div class="form-group">
		<button class="btn btn-success" type="submit"> 
			Kirim
		</button>
	</div>
	
</form>
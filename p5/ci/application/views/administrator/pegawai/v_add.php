<h3 style="text-align: center; border-radius: 20px;"> <?php echo "$sub_judul"; ?> </h3>
<hr>

<form action=" <?php echo site_url('administrator/pegawai/proses_simpan') ?> " method="post">
	<div class="form-group">
		<label for="nip">Nip</label>
		<input type="text" class="form-control" name="nip" id="nip">
	</div>

	<div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" class="form-control" name="nama" id="nama">
	</div>

	<div class="form-group">
		<label for="alamat">Alamat</label>
		<textarea type="text" class="form-control" name="alamat" id="alamat"></textarea>
	</div>

	<div class="form-group">
		<label for="jabatan">Jabatan</label>
		<input type="text" class="form-control" name="jabatan" id="jabatan">
	</div>
		<div class="form-group">
		<button class="btn btn-success" type="submit"> 
			Kirim
		</button>
	</div>
	
</form>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
	<div class="container" style="margin-top: 30px">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header bg-success"> 
						Login
					</div>
					<div class="card-body">

						<?php echo validation_errors('<div class="alert alert-warning">','</div>');		
 
							if ($this->session->flashdata('msg')) {
							 	echo "<div class='alert-info alert'>" . $this->session->flashdata('msg'). "</div>";
							 } 
						?>

						<form action="<?= site_url('administrator/login/proses_login') ?>" method="post">
							<div class="form-group">
								<label for="">Email</label>
								<input type="email" name="email" class="form-control" value="<?php echo set_value('email') ?>">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>">
							</div>
							<input type="submit" class="btn btn-outline-succsess" value="Login">
							<a href="<?= site_url('administrator/login') ?>" class="btn btn-outline-secondary">Kembali</a>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>

</body>
</html>
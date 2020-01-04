<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo "$judul";  ?></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css') ?>">

</head>
<body>

<div id="container">
	<h1>Welcome Bot </h1>
		<?php 
			echo "$nama";
			echo "<br>";
			echo "$umur";
		 ?>

		  <a class="btn btn-succsess" href="<?= site_url('d3rpl/weblanjut/'); ?>">IPK</a>
</div>
</body>

 
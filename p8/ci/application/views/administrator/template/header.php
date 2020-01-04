<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>

<div class="container">
	<nav class="navbar navbar-dark bg-dark navbar-expand-lg mb-4">
	  <a class="navbar-brand" href="#">RPL</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href=" <?=site_url('administrator/pegawai/index'); ?> ">Pegawai</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href=" <?=site_url('administrator/pengguna/index'); ?> ">Pengguna</a>
	      </li>
	      
	    </ul>
	</nav>
	<br>


				
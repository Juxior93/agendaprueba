<!DOCTYPE html>
<html>
<head>
	<title>Agenda</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('datatable/dataTables.bootstrap4.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('fontawesome/css/all.css') ?>">
	<script src="<?php echo base_url('js/jquery-3.5.1.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/dataTables.bootstrap4.min.js') ?>"></script>	
</head>
<body background="<?php echo base_url('img/fondo.jpg') ?>">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
			<a class="navbar-brand" href="<?php echo base_url(); ?>"><i class="fas fa-id-card fa-6x"></i></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url(); ?>">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('/Categorias') ?>">Categoria</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('/Contactos') ?>">Contactos</a>
					</li>
				</ul>
				
			</div>
		</nav>
		<hr>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-4" >
				<center>
					<img src="<?php echo base_url('img/perfil.jpg') ?>" alt="" width="350" height="350">
				</center>
			</div>
			<div class="col-sm-6" style="background-color:  rgb(224, 39, 224);">
				<center>
					<h1>Datos del perfil</h1>
				</center>
				<label for="concepto">Nombre:</label>
				<label for="concepto" class="form-control">Pèrez Juàrez Cesar Augusto</label>
				<label for="monto">Direcciòn</label>
				<label for="concepto" class="form-control">San Francisco Tlaltenco</label>
				<label for="fecha">Edad</label>
				<label for="concepto" class="form-control">22 Años Bien Vividos :D</label>
				<label for="fecha">Hobbit</label>
				<label for="concepto" class="form-control">Jugar videojuegos, comer, escuchar musica</label>
			</div>
		</div>
	</div>
</body>
</html>
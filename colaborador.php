<?php
session_start();
echo "Usuario: " . $_SESSION['usuarioNome'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="usuario.css">
</head>

<body>
	<div uk-sticky class="uk-navbar-container tm-navbar-container uk-active uk-light">
		<div class="uk-container uk-container-expand">
			<nav uk-navbar>
				<div class="uk-navbar-left">
					<a id="sidebar_toggle" class="uk-navbar-toggle" uk-navbar-toggle-icon></a>
					<a href="#" class="uk-navbar-item uk-logo">
						UIKit Admin
					</a>
				</div>
				<div class="uk-navbar-right uk-light">
					<ul class="uk-navbar-nav">
						<li class="uk-active">
							<a href="#">Adrián &nbsp;<span uk-icon="chevron-down"></span></a>
							<div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
								<ul class="uk-nav uk-navbar-dropdown-nav">
									<li class="uk-nav-header">Opciones</li>
									<li><a href="#">Editar Perfil</a></li>
									<li class="uk-nav-header">Acciones</li>
									<li><a href="#">Bloquear</a></li>
									<li><a href="#">Cerrar sesión</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div id="sidebar" class="tm-sidebar-left uk-background-default">
		<center>
			<div class="user">
				<img id="avatar" width="100" class="uk-border-circle" src="https://image.flaticon.com/icons/svg/167/167750.svg" />
				<div class="uk-margin-top"></div>
				<h3 class="uk-text-truncate">Adrián UB</h3>
				<div id="email" class="uk-text-truncate">correo@gmail.com</div>
				<span id="status" class="uk-margin-top uk-label uk-label-success">EN LINEA</span>
			</div>
			<br />
		</center>
		<ul class="uk-nav uk-nav-default">

			<li class="uk-nav-header">
				Elementos UI
			</li>
			<li><a href="buttons.html">Botones</a></li>
			<li><a href="components.html">Componentes</a></li>
			<li><a href="tables.html">Tablas</a></li>

			<li class="uk-nav-header">
				Paginas
			</li>
			<li><a href="login.html">Iniciar sesión</a></li>
			<li><a href="register.html">Registrar</a></li>
			<li><a href="article.html">Articulo</a></li>
			<li><a href="404.html">404</a></li>
		</ul>
	</div>
	<div class="content-padder content-background">
		<div class="uk-section-small uk-section-default header">
			<div class="uk-container uk-container-large">
				<h1><span uk-icon="server"></span> Escritorio</h1>
				<p>
					Bienvenido, Adrián UB
				</p>
				<ul class="uk-breadcrumb">
					<li><a href="index.html">Inicio</a></li>
					<li><span href="">Escritorio</span></li>
				</ul>
			</div>
		</div>
		<div class="uk-section-small">
			<div class="uk-container uk-container-large">
				<div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-4@xl">
					<div>
						<div class="uk-card uk-card-default uk-card-body">
							<span class="statistics-text">Nuevos Registros</span><br />
							<span class="statistics-number">
								14.164
								<span class="uk-label uk-label-success">
									8% <span uk-icon="chevron-up"></span>
								</span>
							</span>
						</div>
					</div>
					<div>
						<div class="uk-card uk-card-default uk-card-body">
							<span class="statistics-text">Trafico del sitio web</span><br />
							<span class="statistics-number">
								123.238
								<span class="uk-label uk-label-danger">
									13% <span uk-icon="chevron-down"></span>
								</span>
							</span>
						</div>
					</div>
					<div>
						<div class="uk-card uk-card-default uk-card-body">
							<span class="statistics-text">Total Facturas</span><br />
							<span class="statistics-number">
								2.316
								<span class="uk-label uk-label-success">
									37% <span uk-icon="chevron-up"></span>
								</span>
							</span>
						</div>
					</div>
					<div>
						<div class="uk-card uk-card-default uk-card-body">
							<span class="statistics-text">Total Ingresos</span><br />
							<span class="statistics-number">
								$6.384
								<span class="uk-label uk-label-success">
									26% <span uk-icon="chevron-up"></span>
								</span>
							</span>
						</div>
					</div>
				</div>
				<div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@l">
					<div>
						<div class="uk-card uk-card-default">
							<div class="uk-card-header">
								Trafico web
							</div>
							<div class="uk-card-body">
								<canvas id="chart1"></canvas>
							</div>
						</div>
					</div>
					<div>
						<div class="uk-card uk-card-default">
							<div class="uk-card-header">
								Trafico web
							</div>
							<div class="uk-card-body">
								<canvas id="chart2"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="usuario.js"></script>
</html>
<br>
<a href="sair.php">Sair</a>
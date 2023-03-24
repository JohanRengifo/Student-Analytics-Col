<?php
date_default_timezone_set('America/Bogota');

$conexion = mysqli_connect("localhost", "root", "", "sac-db");

if (mysqli_connect_errno()) {
	printf("Falló la conexión: %s\n", mysqli_connect_error());
	exit();
}

mysqli_set_charset($conexion, 'utf8');
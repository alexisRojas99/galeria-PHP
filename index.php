<?php require 'conexion.php';

if (!$conexion) {
     die();
}

$fotos_por_pagina = 8;
$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = $pagina_actual > 1 ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM galeria LIMIT $inicio, $fotos_por_pagina");

$statement->execute();
$fotos = $statement->fetchAll();

if (!$fotos) {
     header('Location: index.php');
}

// print_r($fotos);

$statement = $conexion->prepare("SELECT FOUND_ROWS() AS total_filas");
$statement->execute();
$total_post = $statement->fetch()['total_filas'];

$total_paginas = ceil($total_post / $fotos_por_pagina);

require 'views/index.view.php';
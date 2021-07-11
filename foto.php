<?php require 'conexion.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if (!$id) {
     header('Location: index.php');
}

$statement = $conexion->prepare("SELECT * FROM galeria WHERE Id = :id");
$statement->execute(array(':id' => $id));

$foto = $statement->fetch();

if (!$foto) {
     header('Location: index.php');
}

require 'views/foto.view.php';
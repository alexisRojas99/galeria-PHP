<?php require 'conexion.php'; 

if (!$conexion) {
     die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    $check = @getimagesize($_FILES['foto']['tmp_name']);

    if ($check != false) {
         $carpetaDestino = 'fotos/';
         $archivoUpload = $carpetaDestino . $_FILES['foto']['name'];
         move_uploaded_file($_FILES['foto']['tmp_name'], $archivoUpload);

         $statement = $conexion->prepare("INSERT INTO galeria VALUES(:id, :titulo, :imagen, :texto)");

         $statement->execute(array(':id' => null, ':titulo' => $_POST['titulo'], ':imagen' => $carpetaDestino.$_FILES['foto']['name'], 'texto' => $_POST['texto']));

         header('Location: index.php');
    } else {
         $error = 'El archivo no es una imagen o el archivo es muy pesado';
    }

}

require 'views/subir.view.php';
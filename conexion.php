<?php
 
try {
     $conexion = new PDO('mysql:host=localhost;dbname=curso-php', 'root', '');
    //  echo 'Conexion Exitosa';
} catch(PDOException $e) {
     echo 'Error: '.$e;
}
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
</head>

<body>
    <header class="contenedor">
        <h1 class="titulo">Foto: <?php if (!empty($foto['Titulo'])) {echo $foto['Titulo'];} else {echo $foto['Image'];} ?></h1>
    </header>

    <div class="contenedor">
        <div class="foto">
            <img src="<?php echo $foto['Image']; ?>" alt="">
            <p class="texto"><?php echo $foto['Descripcion']; ?></p>
            <a href="#" class="regresar">Regresar</a>
        </div>
    </div>
    
    <footer>
        <p class="copyright">Galeria create by Alexis Rojas</p>
    </footer>

</body>

</html>
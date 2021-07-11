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
        <h1 class="titulo">Subir Foto</h1>
    </header>

    <div class="contenedor">
        <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
            <label for="foto">Selecciona tu foto</label>
            <input type="file" id="foto" name="foto">

            <label for="titulo">Titulo de la Foto</label>
            <input type="text" id="titulo" name="titulo">

            <label for="texto">Descripcion: </label>
            <textarea name="texto" id="texto" cols="30" rows="10" placeholder="Ingresa la Descripcion"></textarea>

            <?php if (isset($error)) : ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>

            <input class="submit" type="submit" value="Subir Foto">
        </form>
    </div>

    <footer>
        <p class="copyright">Galeria create by Alexis Rojas</p>
    </footer>

</body>

</html>
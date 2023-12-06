<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_calculadora.css">
    <title>Mayor o menor de edad</title>
</head>
<body>
<a href="index.html#section-respuestas">
        <img class="home" src="img/home_2.png" alt="">
    </a>
    <!--Metodo GET-->
    <div class="main-frame-cal">
    <form action="method_get.php" method="GET">

        <div class="form-group">
            <h2>Metodo GET</h2>
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Nombre" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Apellido" required>
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlInput1">Cédula</label>
            <input type="number" name="cedula" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Cédula" required>
        </div>
        <button type="submit" name="verificar" class="btn btn-outline-info">Envíar</button>
    </form>

    <?php

// metodo GET

$nombre = null;
$apellido = null;
$cedula = null;
    
    if (isset($_GET['verificar'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $cedula = $_GET['cedula'];
    
        echo "<strong> El nombre registrado es: </strong> $nombre <br>";
        echo "<strong> El apellido registrado es: </strong> $apellido <br>";
        echo "<strong> El número de registrado documento es: </strong> $cedula <br>";

    }

    ?>
</body>
</html>
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
    
    <div class="main-frame-cal">
    <form action="edad_exacta.php" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Por favor seleecione su fecha de nacimiento:</label>
            <input type="date" name="fecha_nacimiento" class="form-control" id="exampleFormControlInput1" required>
        </div>
        
        <button type="submit" name="verificar" class="btn btn-outline-info">Envíar</button>
    </form>

    <?php
    $fecha = 0;
    $date2 = 0;
    $fecha_actual = 0;

    //$comprovar = var_dump($_POST);

    const constante_18 = 18;
    define ("constente0","0");

    if (isset($_POST['verificar'])) {
        $fecha = new DateTime($_POST['fecha_nacimiento']);
       
        $date2 = new DateTime(date("y-m-d"));

        $fecha_actual = $fecha->diff($date2);

        $edad_actual = $fecha_actual->y;
        $edad_meses = $fecha_actual->m;
        $edad_dias = $fecha_actual->d;


        if ($fecha->format('Y') > date("Y")) {
            echo "<h2>Usted no ha nacido</h2>";
            $edad_actual=0;
            $edad_meses=0;
            $edad_dias=0;
        }
        else if ($edad_actual >= constante_18) {
            echo "<h2>Es mayor de edad, dado que tiene " .$edad_actual. " años </h2>";
        }
        else if ($edad_actual < constante_18 && $edad_actual >  constente0) {
            echo "<h2>Es menor de edad, dado que tiene " .$edad_actual. " años </h2>";
        }
        else {
            echo "<h2>No valido</h2>";
        }

        echo "<br> Usted tiene Años: ".$edad_actual." <br> Usted tiene Años Meses: ".$edad_meses." <br> Usted tiene Años Días: ".$edad_dias; 
    }

    ?>

    </div>
</body>
</html>
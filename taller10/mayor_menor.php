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
    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Edad</label>
            <input type="number"  max="110" name="edad" class="form-control" id="exampleFormControlInput1" placeholder="Por favor registre su edad" required>
        </div>
        <button type="submit" name="verificar" class="btn btn-outline-info">Resultado</button>
    </form>

    <?php

    $edad = 0;
    #comentario: const constante_0 = 18;
    const constante_18 = 18;
    // opción dos de constante
    //define ("constente_0","0");
    const constante_0 = 0;
    
    if (isset($_POST['verificar'])) {
        $edad = $_POST['edad'];

        if ($edad >= constante_18) {
            echo "<h1>Es mayor de edad</h1>";
        }
        //Opción dos
       # else  {
          #  echo "<h1>Es menor de edad</h1>";
        #}
        #comentario: else if (18 > $edad && 0 < $edad)
        else if ($edad < constante_18 && $edad > constante_0) {
            echo "<h1>Es menor de edad</h1>";
        }
        else{
           echo "<h1>No valido</h1>";
        }
}

    ?>
</body>
</html>
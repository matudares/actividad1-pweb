<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculo de hipotenusa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

    if (isset($_POST['CA']) && $_POST['btn'] == 'Calcular') {
        $CA = $_POST['CA'];
        $CO = $_POST['CO'];
        $hipotenusa = null;

        if (!empty($CA) or !empty($CO)) {
            echo "<h2 align = 'center'> CALCULO DEL AREA DEL RECTANGULO </h2>";

            $hipotenusa= sqrt(($CA*$CA) + ($CO*$CO));

            echo "<br>Cateto Adyacente: ", $CA;
            echo "<br>Cateto Opuesto: " ,$CO;
            echo "<br/><br/>";
            echo "<br>Hipotenusa del triangulo: ", $hipotenusa;
            echo "<br/><br/>";
            echo "<div id = 'return' align='center'><a href='index.html'>Regresar a la calculadora</a></div>";
        }
        else {
            echo "<h1 align = 'center' > Hubo un error en el calculo del area, por favor verifique los campos </h1>";
            echo "<div align='center'><a href='index.html'>Regresar a la calculadora</a></div>";
        }
    } 

?>
</body>
</html>
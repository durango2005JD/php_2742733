<?php

$Estatura = "170cm";
$Velocidad = "27 km/h";
$Edad = 20;

if($Estatura === "170cm" && $Velocidad === "27 km/h"){
    echo "Puedes ingresar al equipo";
}else{
    echo "No puedes ingresar al equipo";
}

if($Edad > 18){
    echo " <br> Divisiones mayores";
}else{
    echo " <br> Divisiones menores";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br><br><a href="index5.php">Problema 5</a>
</body>
</html>
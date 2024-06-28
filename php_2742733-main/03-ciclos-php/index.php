<?php

//while//

//Contando hasta 500 de 20 en 20//
echo "WHILE: <br> <br>";

$i = 0;

while ($i < 300){
    $i+=20;
    echo $i, "<br>";
}   

//for//

//Tabla del 6//

echo "<br> FOR <br> <br>";

for ($i = 0; $i <= 10; $i++) {
    echo "6 x ",$i," = ",$i * 6,"!<br>";
  }

//Foreach//

//Lista de carros y su colores//

echo "<br> FOREACH <br> <br>";

  $Carros = array("Volvo"=>"rojo", "Mazda"=>"azul", "Mercedes"=>"Gris");

  foreach ($Carros as $model => $color) {
    echo "$model : $color <br>";
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
    
</body>
</html>
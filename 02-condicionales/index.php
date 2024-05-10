<?php
$articulo = "10"

if($articulos <12) {
    echo "caja rapida";
} else{
    echo "caja normal";
}

echo "<br/> <br/>";

$edad = "19"

if($edad >= 19) {
    echo "puedes votar";
} else {
    echo "no puedes votar";
}


?>

<!-- ejercicio 2 -->
 
<?php
$nombre = "mario";
$edad = "20";

if($años <18){
    echo " no se puede entrar a la discoteca <br/>";
} else{
    echo " puede entrar a la discoteca <br/>";
} if($nombre=="mario" xor$nombre=="carlos") {
    echo "puede entrar al vip <br/>";
} else {
    echo "No puede entrar al vip <br/>";
}
?>

<!-- ejercico 3 -->

<?php

$años = "17";
$velocidad = "28";
$estatura = "175";

if($velocidad > 27 && $estatura > 170)
 {
    echo "puede ingresar al equipo <br/>" ;
} else{
    echo "no puede ingresar al equipo <br/>" ;

} if($velocidad > 27 && $estatura > 170 && $años>18){
    echo "vas a la liga de mayores <br/>";
} else{
    echo "vas a la liga de menores <br/>";
} echo " <br/> <br/>";

?>

<!-- ejercicio 4 -->
<?php

$aire= "azul";

switch($aire){

    case "verde":
    echo "calidad del aire es buena"

    break;
    case "amarillo":
    echo "calidad del aire es moderada";
    
    break;
    case "naranja":
    echo "calidad del aire no es saludable para grupos sensibles"

    break;
    case "rojo":
    echo "calidad del aire no es saludable";

    break;
    case "púrpura":
    echo "calidad del aire es muy poco saludable";

    break;
    case "marrón":
    echo "calidad del aire es peligrosa";

    break;
    default:
    echo "el color no es válido";
    break;

}

?>
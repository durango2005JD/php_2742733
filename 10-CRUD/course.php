<?php require('conexion.php')?>

<?php 
if(isset ($_GET['id'])){
    $id = $_GET['id'];
   
    $statement = $conexion->prepare("SELECT * FROM cursos WHERE id = '$id' ");
    $statement->execute();

    $result=$statement->fetch();

}else{
    header('location:landing.php');
}
?>

<?php require('header.php')?>

    <h3 style="font-size: 80px; display:flex; justify-content:center; margin: top 2px;"><?php echo $result['titulo'] ?></h3>
    <div  class="fotocurso">
        <img src=<?php echo $result['imagen'] ?> class="img-fluid" alt="...">
    </div>
    <p style="font-size: 20px; display:flex; justify-content:center; margin: auto;" class="text-center"><?php echo $result['descripcion'] ?></p>
    <p style="font-size: 20px; display:flex; justify-content:center; margin: auto;" class="text-center"><?php echo $result['estudiantes'] ?></p>
    <button class="btn btn-success"><a href="./tablas.php"> Inscribete </a></button>




<?php require('footer.php')?>

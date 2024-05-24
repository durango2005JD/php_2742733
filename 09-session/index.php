<?php
    
    
/*    session_start();
   
   $_SESSION['nombre'] = 'Josefina';
   $_SESSION['pais'] = 'Colombia'; */
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=x, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Pagina de inicio, Sesion inicializada</h1>
    
   
    

    <form action="registro.php" method="post">

    <label for="username">User</label>
    <input id="username" type="text" placeholder="User" name="username">
    <label for="password">Password</label>
    <input id="password" type="password" placeholder="Password" name="password">
    <button type="submit">Registro</button>

    </form>


    <a href="./user.php">User page</a>
    <a href="./cerrar.php">Cerrar</a>


</body>
</html>
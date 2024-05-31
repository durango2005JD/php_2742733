<?php session_start();

$orden = "rellene el formulario";

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){  
    $usuario = $_POST ['username'];
    $password = $_POST ['password'];
    $password_2 = $_POST ['password_2'];
    $email = $_POST ['email'];
    
}

if(empty($usuario) or empty($password)){
    echo  '<p style="color: blue; ">' . $orden . '</p>'  ;
    }else{

    $_SESSION['userRegister'] = $usuario;
    $_SESSION['passRegister'] = $password;
    $_SESSION['pass2Register'] = $password_2;
    $_SESSION['emailRegister'] = $email;
    
    try {
        $conexion = new PDO("mysql: host=localhost; dbname=focaapp",'root','');
        echo "conexion OK <br>";
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    } 
    $statement = $conexion->prepare(" INSERT INTO `userapp` (`ID`, `Username`, `Email`, `Password`)
    VALUES (NULL, :username, :email, :pass)" );

    $statement->execute(array(":username"=>$usuario,":email"=>$email,":pass"=>$password));

    $statement = $statement->fetchAll();

    if($password == $password_2){
        echo "datos enviados";
    }else{
        echo "Las contraseñas no coinciden";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>

<h1>Registrate</h1>

    <!-- <p style="color: blue"> <?php echo $orden ?>  </p> -->

    <form action="registro.php" method="post">

    <label for="username">User</label>
    <input id="username" type="text" placeholder="User" name="username"> <br>
    <label for="email">Email</label>
    <input type="email" id="email" placeholder="Email" name="email" required> <br>
    <label for="password">Password</label>
    <input id="password" type="password" placeholder="Password" name="password"> <br>
    <label for="password_2">Password</label>
    <input id="password_2" type="password" placeholder="Confirme la contraseña" name="password_2"> <br>
    <button type="submit">Registro</button>

    </form>

    


<br>
<a href="index.php">Iniciar Sesion</a>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
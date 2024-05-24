<?php

    if($_POST['username']){

    session_start();

    $_SESSION ['nombre'] = $_POST['username'];
    $_SESSION ['password'] = $_POST['password'];

    echo 'puede iniciar sesion';
}

?>
<?php 
        include("registrar.php"); 
        ?>
<!DOCTYPE html>

<html>
    <head>
        <title>Registrar Usuario</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">

    </head>
    <body>
        <form method="past">
            <h1>REGISTRARSE</h1>
            <input type="text" name="name" placeholder="Nombre Completo">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="pass" placeholder="Password">
            <input type="submit" name="register">

        </form>

        <a href="/main/iniciar sesion/inicio.html"><p>inicio de sesion</p></a>
       
    </body>
</html> 
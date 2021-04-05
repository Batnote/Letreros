<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicidad Gonzalez Chong</title>
    <link rel="shortcut icon" href="images/extras/logo_blanco.png">      
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lexend&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/estilos.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/carousel_historia"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $menu = $('#menu').find('ul').find('li');

        $menu.hover(function() {
            $(this).children('ul').stop();
            $(this).children('ul').slideDown();
        }, function() {
            $(this).children('ul').stop();
            $(this).children('ul').slideUp();
        });
    });
</script>
</head>

<body class="fondo_opciones">

<div class="imagen_logo"><img src="images/extras/logo_blanco.png" width="200"></div>



<?php include("menus/principal.php"); ?>

<div class="background_historia">
<div class="text_cubo_historia">esta es una prueba de texto esta es una prueba de texto esta es una prueba de texto 
esta es una prueba de texto esta es una prueba de texto esta es una prueba de texto 
esta es una prueba de texto esta es una prueba de texto esta es una prueba de texto 
esta es una prueba de texto esta es una prueba de texto esta es una prueba de texto 
esta es una prueba de texto esta es una prueba de texto esta es una prueba de texto 
esta es una prueba de texto esta es una prueba de texto esta es una prueba de texto 
esta es una prueba de texto esta es una prueba de texto esta es una prueba de texto 
esta es una prueba de texto esta es una prueba de texto esta es una prueba de texto 
</div>
</div>

    

</body> 
</html>
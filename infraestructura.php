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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> 
	<script type="text/javascript" src="js/jquery.jshowoff.min.js"></script>
    <link rel="stylesheet" href="css/jshowoff.css" type="text/css" media="screen, projection"/>
    <link rel="stylesheet" href="css/estilos.css"> 
</head>

<body class="fondo_opciones">

<div class="imagen_logo"><img src="images/extras/logo_blanco.png" width="200"></div>



<?php include("menus/principal.php"); ?>

<div class="background_historia">
<div id="features" class="">
				<div><a href="http://google.com"><img src="http://farm5.static.flickr.com/4017/4303103738_a4745a3e6d_o.jpg" alt="Shore" /></a></div>
				<div><img src="http://farm5.static.flickr.com/4062/4302354579_2a16dcb3cd_o.jpg" alt="Eddie" class="eddie" /></div>	
				<div><a href="http://imgur.com"><img src="http://farm5.static.flickr.com/4067/4302354517_d72d321f17_o.jpg" alt="Flower" /></a></div>
				<div><a href="http://gmail.com"><img src="http://farm3.static.flickr.com/2739/4303103822_a3b23ff7f5_o.jpg" alt="Fern" /></a></div>
			</div>
			<script type="text/javascript">		
				$(document).ready(function(){ $('#features').jshowoff(); });
			</script>
</div>
</div>

    


</body> 
</html>
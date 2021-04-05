<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gonzalez Chong</title>
    <link rel="shortcut icon" href="images/extras/logo_blanco.png">  
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lexend&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="js/carousel.js"></script>
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
<link rel="stylesheet" href="css/superslides.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="imagen_logo"><img src="images/extras/logo_blanco.png" width="200"></div>
<?php include("menus/principal.php"); ?>
    <div id="slides">
    
        <ul class="slides-container">
        
            <li>
                <img src="images/portada/chicureo_alemana_final.jpg" alt="">
                <div class="descripcion">
                    <h2 class="descripcion_titulo">Titulo 1</h2>
                    <p class="descripcion_texto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio 
                        unde, in accusantium beatae obcaecati non autem eaque nesciunt sequi culpa, minus ipsam suscipit qu
                        os consectetur at placeat temporibus vel inventore?
                    </p>
                </div>
            </li>
            <li>
            <img src="images/portada/mandarin_oriental_Santiago_Final.jpg" alt="">
            <div class="descripcion">
                    <h2 class="descripcion_titulo">Titulo 2</h2>
                    <p class="descripcion_texto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio 
                        unde, in accusantium beatae obcaecati non autem eaque nesciunt sequi culpa, minus ipsam suscipit qu
                        os consectetur at placeat temporibus vel inventore?
                    </p>
                </div>
            </li>
            <li>
            <img src="images/portada/pudahuel_1_final.jpg" alt="">
            <div class="descripcion">
                    <h2 class="descripcion_titulo">Titulo 3</h2>
                    <p class="descripcion_texto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio 
                        unde, in accusantium beatae obcaecati non autem eaque nesciunt sequi culpa, minus ipsam suscipit qu
                        os consectetur at placeat temporibus vel inventore?
                    </p>
                </div>
            </li>
            <li>
            <img src="images/portada/mandarin_oriental_Santiago_Final.jpg" alt="">
            <div class="descripcion">
                    <h2 class="descripcion_titulo">Titulo 4</h2>
                    <p class="descripcion_texto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio 
                        unde, in accusantium beatae obcaecati non autem eaque nesciunt sequi culpa, minus ipsam suscipit qu
                        os consectetur at placeat temporibus vel inventore?
                    </p>
                </div>
            </li>
            
        </ul>
        
        <nav class="slides-navigation">
        
            <a href="#" class="next">&#62;</a>
            <a href="#" class="prev">&#60;</a>
            
  </nav>

    </div>
  
    <script src="js/jquery.js"></script>
    <script src="js/jquery.superslides.js"></script>
    
</body>
</html>
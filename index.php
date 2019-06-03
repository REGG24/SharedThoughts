<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Shared Toughts</title>
        <meta charset="UTF-8"><!--Codificacion de caracteres utilizada, UTF-8 es un estandar reconocido por la RFC 3629-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--controlar la dimension de la pagina de acuerdo al tamaño de la pantalla-->
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <script src="js/angular.min.js"></script> <!-- To use the aungular script that we downloaded -->
        <script src="js/app.js"></script><!--The script that we made to control angularjs-->
        <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
        <script src="js/navigationbar.js"></script><!--Script para el menu responsivo-->         
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">       
        <link rel="stylesheet" href="css/styleHeader.css">
        <link rel="stylesheet" href="css/styleHome.css">
         <style>
             body{
                 /*que para la imagen*/
                 background-image: url(img/home.jpg);
                 background-repeat: no-repeat;
                 background-position: center center;
                 background-size: cover;
                 display: flex;
                 min-height: 100vh;
             }
         </style>
    </head>

    <body ng-app = "SharedThoughtsApp">
       
    <div class = contenedor>
      <div ng-include src="'header.html'"></div>     
       <div class="main">
         <?php
          require("php/gallery.php");       
         ?>       
       </div>

       <div ng-include src="'footer.html'"></div>

    </div>
      
    </body>

</html>
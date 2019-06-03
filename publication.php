<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Publication</title>
        <meta charset="UTF-8"><!--Codificacion de caracteres utilizada, UTF-8 es un estandar reconocido por la RFC 3629-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--controlar la dimension de la pagina de acuerdo al tamaño de la pantalla-->
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <script src="js/angular.min.js"></script> <!-- To use the aungular script that we downloaded -->
        <script src="js/app.js"></script><!--The script that we made to control angularjs-->
        <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
        <script src="js/navigationbar.js"></script><!--Script para el menu responsivo-->
         
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">       
        <link rel="stylesheet" href="css/styleHeader.css">
        <link rel="stylesheet" href="css/stylePublication.css">
       </head>

    <body ng-app = "SharedThoughtsApp">
      
      <?php
        if(isset($_SESSION["logueado"]) && $_SESSION["logueado"] == TRUE){//si existe la variable y hay una sesion iniciada entonces ponemos el header de Administrador       	    
      ?>
        <div ng-include src="'headerAdmin.html'"></div> 
      
      <?php
	        } else {//pero si de lo contrario no hay sesión iniciada usamos el header normal               
       ?>
            <div ng-include src="'header.html'"></div>
      <?php
            }        
      ?>  

      <div class="main">
        <?php
           require("php/connection.php");
           if(isset($_SESSION["id"])){
             $id = $_SESSION["id"];
           }
           
           $id_p = $_GET['id_p'];
           $sql = "SELECT * FROM publications WHERE id_p = $id_p";
           $result = mysqli_query($mysqli,$sql);
           if($result){
            while($row = mysqli_fetch_assoc($result)){
              $title = $row['title'];
              $description = $row['description'];
              $pathImg = $row['pathImg'];
              $content = $row['content'];
             }   
           }else{
             echo "Something went wrong with the query";
           }
           echo "<div class = 'title'>{$title}</div>";
           echo "<img class = 'image' src='{$pathImg}'  width='450' height='300'>";        
           echo "<p>{$content}</p>";
        ?>
      </div>
             
    </body>

</html>
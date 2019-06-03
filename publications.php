<?php
  session_start();
?>

<html>
  <head>
    <title>Publications</title>
    <meta charset="UTF-8"><!--Codificacion de caracteres utilizada, UTF-8 es un estandar reconocido por la RFC 3629-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--controlar la dimension de la pagina de acuerdo al tamaño de la pantalla-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="js/angular.min.js"></script> <!-- To use the aungular script that we downloaded -->
    <script src="js/app.js"></script><!--The script that we made to control angularjs-->
    <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/navigationbar.js"></script><!--Script para el menu responsivo-->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">       
    <link rel="stylesheet" href="css/styleHeader.css">
    <link rel="stylesheet" href="css/stylePublications.css">
  </head>
  <body ng-app = "SharedThoughtsApp">
  <div class = contenedor>     
      <div ng-include src="'headerAdmin.html'"></div>  

       <div class="main">
       
 <?php
      require("php/connection.php");     
      $id = $_SESSION["id"];
      $urlModify = "modify_publication.php";
      $urlDelete = "php/delete_publication.php";

      $query = "SELECT * FROM publications WHERE id_user = $id";
    
      $result = $mysqli->query($query); 
      if ($result->num_rows > 0) {
   ?>     
      <table>
        <tr>
            <th class="title">Title</th> 
            <th class="description">Description</th> 
            <th class="image">Image</th>
            <th class="date">Date</th>
            <th class="edit"></th>
            <th class="delete"></th>
        </tr>
    <?php

       // output data of each row
       while($row = $result->fetch_assoc()) {
          $id_p = $row['id_p']; 
          $pathImg = $row['pathImg'];
          echo "<tr>
                  <td>" . $row["title"]. "</td>
                  <td>" . $row["description"] . "</td>
                  <td><img src='{$row['pathImg']}' style='width:50px;height:30px;'></td>
                  <td>" . $row["date"]. "</td>
                  <td><a href='$urlModify?id_p=$id_p'><button class='editB' >Edit</button></a></td>
                  <td><a href='$urlDelete?id_p=$id_p&pathImg=$pathImg'><button class='deleteB' onclick=\"return confirm('Do you really want to delete this publication?')\">Delete</button></a></td>
                </tr>";
       }
        echo "</table>";
       } 
       else { 
         echo "<p>You do not have publications yet</p>"; 
       }
       $mysqli->close();
    ?>    
     
       </div><!--div main-->

    </div>  
  </body>
</html>
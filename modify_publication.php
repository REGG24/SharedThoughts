<?php 
   
  require("php/connection.php");
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
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Modify a publication</title>
        <meta charset="UTF-8"><!--Codificacion de caracteres utilizada, UTF-8 es un estandar reconocido por la RFC 3629-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--controlar la dimension de la pagina de acuerdo al tamaño de la pantalla-->
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <script src="js/angular.min.js"></script> <!-- To use the aungular script that we downloaded -->
        <script src="js/app.js"></script><!--The script that we made to control angularjs-->
        <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
        <script src="js/navigationbar.js"></script><!--Script para el menu responsivo-->
        <script type="text/javascript" src="js/validatePublish.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">       
        <link rel="stylesheet" href="css/styleHeader.css">  
        <link rel="stylesheet" href="css/stylePublish.css">        
    </head>
    <body ng-app="SharedThoughtsApp">
        <div ng-include src="'headerAdmin.html'"></div>
         
        <main class="main">
            <div class="divtext">
                <form name="Publish" action="php/modify_publication_process.php?id_p=<?php echo $id_p ?>" method="POST" enctype="multipart/form-data" onsubmit = "return(validate());">
                  <h3>Write the title:</h3>
                  <textarea class= "titletext" name="title" rows="2" id="title"  cols="40" placeholder="Title"><?php echo $title; ?></textarea>
                  <h3>Write a short description:</h3>
                  <textarea class= "titletext" name="description" rows="2" id="description"  cols="40" placeholder="Description"><?php echo $description; ?></textarea>                 
                   
                  <h3>Write the content:</h3>
                  <textarea class= "titletext" name ="content" id ="content" rows="15" cols="40" placeholder="content" ><?php echo $content; ?></textarea>
                  <input type="submit" id="submit" value="Modify" id="publishbutton">
                  <input type="button" value="Cancel" id="cancelbutton" onclick="window.location='publications.php';" >
                </form>
            </div>          
        </main>

    </body>
    <script>
          document.getElementById('title').maxLength = 50;
          document.getElementById('description').maxLength = 155;
     </script>
</html>
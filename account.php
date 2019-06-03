<?php
    session_start(); 
    require("php/connection.php");
    
    $id = $_SESSION["id"];

    $query="SELECT * FROM users WHERE id_user=$id ";
    
    if($answer = $mysqli->query($query)) {
      while($row = $answer->fetch_array()) {
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $email = $row["email"];
        $pass = $row["pass"];
      }
      $answer->close();
    }
    else{
      echo "It ocurred an erroy with the query";
    }
    $mysqli->close();	
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Account</title>
    <meta charset="UTF-8"><!--Codificacion de caracteres utilizada, UTF-8 es un estandar reconocido por la RFC 3629-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--controlar la dimension de la pagina de acuerdo al tamaño de la pantalla-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="js/angular.min.js"></script> <!-- To use the aungular script that we downloaded -->
    <script src="js/app.js"></script><!--The script that we made to control angularjs-->
    <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/navigationbar.js"></script><!--Script para el menu responsivo-->
    <script src="js/account.js";></script>
    <script type="text/javascript" src="js/validateAccount.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">       
    <link rel="stylesheet" href="css/styleHeader.css">
    <link rel="stylesheet" href="css/styleAccount.css">
    <link rel="stylesheet" href="css/styleFooter.css">
  </head>
  <body ng-app = "SharedThoughtsApp">
    
    <div ng-include src="'headerAdmin.html'"></div>

    
    <form name="Account" action="php/modify_process.php"  method="POST" autocomplete="off" onsubmit = "return(validate());">
            <h2>Your information</h2>
            <div class="edit"><button type="button" onclick="enableFields()" class="edit" >Edit</button></div>
            <input type="text" placeholder="first name" name="first-name" id="first-name" class="centered" disabled=true value = "<?php echo $first_name; ?>" >
            <input type="text" placeholder="last name" name="last-name" id="last-name" class="centered" disabled=true value = "<?php echo $last_name; ?>">
            <input type="email" placeholder="email" name="email" id="email" class="centered" disabled=true value = "<?php echo $email; ?>">
            <input type="password" placeholder="&#128272; password" name="pass" id="pass" class="centered" disabled=true value = "<?php echo $pass; ?>">           
            <input type="checkbox" onclick="passFunction()" id="unmask" disabled=true> Show password
            <input type="submit" value="Save changes"  id="submit" disabled=true>
            <a href="admin.php"><button type="button"  id="cancelButton" >Cancel</button></a>
            <a id="create" href="php/delete_user.php" onclick="return confirm('Do you really want to delete your account? It will also delete all your publications!')">Delete account</a>                  
        </form>               
  </body>
  <script>
          document.getElementById('first-name').maxLength = 40;
          document.getElementById('last-name').maxLength = 40;
          document.getElementById('email').maxLength = 254;
          document.getElementById('pass').maxLength = 20;
  </script> 
</html>
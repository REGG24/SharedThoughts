<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8"><!--Codificacion de caracteres utilizada, UTF-8 es un estandar reconocido por la RFC 3629-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--controlar la dimension de la pagina de acuerdo al tamaño de la pantalla-->
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <script src="js/angular.min.js"></script> <!-- To use the aungular script that we downloaded -->
        <script src="js/app.js"></script><!--The script that we made to control angularjs-->
        <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="js/validateLogin.js"></script>
        <script src="js/navigationbar.js"></script><!--Script para el menu responsivo-->
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">       
        <link rel="stylesheet" href="css/styleHeader.css">
        <link rel="stylesheet" type="text/css" href="css/styleLogin.css">
        
    </head>

    <body ng-app = "SharedThoughtsApp">
        
       <!--This like a way of putting an extern header with angularjs, the ng-include-->
      <div ng-include src="'header.html'"></div> 
      
      <form name='Login' id='Login' action="php/login_process.php" method="POST" autocomplete="off" onsubmit = "return(validate());">
            <h2>Login</h2>
            <input type="text" placeholder="email" name="email" id="email" autocompleter="false" class="centered">
            <input type="password" placeholder="&#128272; password" name="pass" id="pass" class="centered">
            <input type="submit" name="submit"  id="submit" value="Login" class="centered">
            <a id="create" href="register.php">Create account</a>
        </form>
        
             
       
    </body>

        <script>
          document.getElementById('email').maxLength = 254;
          document.getElementById('pass').maxLength = 20;
        </script> 
    
</html>


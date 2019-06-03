<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Register</title>
    <meta charset="UTF-8"><!--Codificacion de caracteres utilizada, UTF-8 es un estandar reconocido por la RFC 3629-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--controlar la dimension de la pagina de acuerdo al tamaño de la pantalla-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="js/angular.min.js"></script> <!-- To use the aungular script that we downloaded -->
    <script src="js/app.js"></script><!--The script that we made to control angularjs-->
    <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/navigationbar.js"></script><!--Script para el menu responsivo-->
    <script type="text/javascript" src="js/validateRegister.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">       
    <link rel="stylesheet" href="css/styleHeader.css">
    <link rel="stylesheet" href="css/styleLogin.css">
  </head>
  <body ng-app = "SharedThoughtsApp">
    <div ng-include src="'header.html'"></div>
    <form name = "Register" action="php/register_process.php"  method="POST" autocomplete="off" onsubmit = "return(validate());">
            <h2>Register</h2>
            <h4>Enter your information</h4>
            <input type="text" placeholder="first name" name="first-name" id="first-name" class="centered">
            <input type="text" placeholder="last name" name="last-name" id="last-name" class="centered">
            <input type="email" placeholder="email" name="email" id="email" class="centered">
            <input type="password" placeholder="&#128272; password" name="pass" id="pass" class="centered">           
            <input type="checkbox" onclick="passFunction()" id="unmask"> Show password         
            <input type="submit" id="submit" value="Send" class="centered">
        </form>
        <script>
           function passFunction() {
              var x = document.getElementById("pass");
              if (x.type === "password") {
                  x.type = "text";
              } else {
                  x.type = "password";
                }
           }
        </script>
        <script>
          document.getElementById('first-name').maxLength = 40;
          document.getElementById('last-name').maxLength = 40;
          document.getElementById('email').maxLength = 254;
          document.getElementById('pass').maxLength = 20;
  </script> 
  </body>
</html>
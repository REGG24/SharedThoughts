<?php
  session_start();
  require("connection.php");

  //obtener los valores
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $query = "SELECT * FROM users WHERE email = '$email' and pass = '$pass'";

  if($resultado = $mysqli->query($query)) {
    
    while($row = $resultado->fetch_array()) {
      $userok = $row["email"];
      $passok = $row["pass"];
      $id = $row["id_user"];
    }
    $resultado->close();
  }
  else{
    echo "consulta mal hecha";
  }
  $mysqli->close();

  if(isset($email) && isset($pass)) {
 
    if($email == $userok && $pass == $passok) {
      
      $_SESSION["logueado"] = TRUE;
      $_SESSION["id"] = $id;
      header("Location: ../admin.php");exit;     
    }
    else {
      
        echo "<script type='text/javascript'>alert('Wrong Username or Password');
        window.location='../login.php';
        </script>";
        
    }
  }
 else {
  header("Location: ../index.php");exit;
 }

?>
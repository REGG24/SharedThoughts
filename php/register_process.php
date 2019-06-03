<?php
  require("connection.php");
  //obtener los valores
  $first = $_POST['first-name'];
  $last = $_POST['last-name'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $registrado = FALSE;

  $query = "SELECT email FROM users";
  if($answer = $mysqli->query($query)) {
    while($row = $answer->fetch_array()) {
      if($row["email"] == $email){
        $registrado = TRUE;
      }
    }
    $answer->close();
  }
  else{
    //echo "It ocurred an erroy with the query";
  }
  $mysqli->close();	

  if($registrado){
    echo 
    "<script type='text/javascript'>alert('The email you are trying to use is already used');
        window.location='../register.php';
     </script>";
  }else{
    require("connection.php");
    $query = "INSERT INTO users VALUES(NULL,'$first','$last','$email','$pass')";
  
    $execute=mysqli_query($mysqli,$query);
  
    if($execute) { 
      mysqli_close($mysqli);
      header("Location: ../login.php");exit;
    }else{
      die("Error: ". mysqli_error());
    }
  }



  
  
?>
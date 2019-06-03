<?php
 if(isset($_POST)){
    require("connection.php");
    session_start();

    //obtener los valores
  $first = $_POST['first-name'];
  $last = $_POST['last-name'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $id = $_SESSION["id"];

  $query="UPDATE users SET first_name = '$first', last_name = '$last', email = '$email', pass = '$pass' WHERE id_user= $id ";
  $execute=mysqli_query($mysqli,$query);

  if($execute) { 
    mysqli_close($mysqli);
    header("Location: ../admin.php");exit;
  }else{
    die("Error: ". mysqli_error());
  }
 } 
?>
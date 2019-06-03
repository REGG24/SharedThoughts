<?php
  session_start();
  require("connection.php");
  
  

  //obtener los valores
  $title = $_POST['title'];
  $description = $_POST['description'];
  $content = $_POST['content'];
  $contentReplaced = str_replace("'", "\'", $content); 
  $id = $_SESSION["id"];
  $date = date('Y-m-d H:i:s');
  $views = 0;
  $likes = 0;
  $id_p = $_GET['id_p'];

  $query="UPDATE publications SET title = '$title', description = '$description', content = '$contentReplaced' WHERE id_p= $id_p ";
  
   $execute=mysqli_query($mysqli,$query);

   if($execute) { 
     mysqli_close($mysqli);
     header("Location: ../publications.php");exit;
   }else{
     die("Error5: ". mysqli_error($mysqli));
   }


  
  
?>
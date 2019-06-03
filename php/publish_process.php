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

  require("upload.php");//se sube la imagen al servidor, no a la base de datos, y se guarda la ruta en $fileDestination
  if($problemImage ==" "){
   $query = "INSERT INTO publications VALUES(NULL,$id,'$date','$title','$description','$filePath','$contentReplaced','$views','$likes')";
  
   $execute=mysqli_query($mysqli,$query);

   if($execute) { 
     mysqli_close($mysqli);
     header("Location: ../admin.php");exit;
   }else{
     die("Error5: ". mysqli_error($mysqli));
   }
  }else{
    //echo "It ocurred an error with the image that you are trying to upload: ".$problemImage." please try again with other image.";
  }
  
?>
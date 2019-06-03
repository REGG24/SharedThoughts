<?php   
  require("connection.php");
  $id_p = $_GET['id_p'];
  $pathImg = $_GET['pathImg'];
  $pathImg = "../".$pathImg;
  $query="DELETE FROM publications WHERE id_p= $id_p";
  $execute=mysqli_query($mysqli,$query);

  if($execute) { 
    mysqli_close($mysqli);
    //lets delete the image
    if(!unlink($pathImg)){
       //echo "Image was not deleted";
       header("Location: ../publications.php");
    }else{
      header("Location: ../publications.php");exit;
    }  
  }else{
    die("Error: ". mysqli_error());
  }
 
 ?>
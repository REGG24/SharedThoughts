<?php 
  session_start();
  $id = $_SESSION["id"];
  $problemImage=" ";

   //obtenemos las rutas de las imagenes a borrar
   require("connection.php");
   $sql = "SELECT pathImg FROM publications WHERE id_user=$id";
   $result = mysqli_query($mysqli,$sql);
   $locations = array();
   while($row = mysqli_fetch_assoc($result)){  
      $locations[] = $row['pathImg'];            
   }
   mysqli_close($mysqli);
   
  //borramos las publicaciones
   require("connection.php");
   $query="DELETE FROM publications WHERE id_user= $id ";
   $execute=mysqli_query($mysqli,$query);
   if($execute) { 
     mysqli_close($mysqli);
     //tenemos que borrar todas las imagenes de las publicaciones borradas     
      for($i=0; $i < count($locations);$i++ ){
        $locations[$i]="../".$locations[$i];
        if(!unlink($locations[$i])){
           $problemImage ="problem";
        }else{  

        }  
       } 
       
    //echo "problemImage = ".$problemImage;
   }else{
     die("Error: ". mysqli_error());
   }

  //ahora si borramos al usuario
  require("connection.php");
  $query="DELETE FROM users WHERE id_user= $id ";
  $execute=mysqli_query($mysqli,$query);
  if($execute) { 
    mysqli_close($mysqli);
    require("signout.php");
  }else{
    die("Error: ". mysqli_error());
  }
 
 ?>
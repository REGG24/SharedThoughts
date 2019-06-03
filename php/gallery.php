<?php
        
        require("php/connection.php");
        $sql = "SELECT * FROM publications";
        $i = 0;
        $result = mysqli_query($mysqli,$sql);
        $url = "publication.php";

        while($row = mysqli_fetch_assoc($result)){  
           $id_p = $row['id_p'];        
           echo 
             "<div class='responsive'>
             <div class='gallery'>
             <a href='$url?id_p=$id_p'>
             <div class='title'>{$row['title']}</div>
             <div class='desc'>{$row['description']}</div>
               
                 <img src='{$row['pathImg']}'  width='600' height='400'>
                            
             </div>
             </a> 
           </div>
           ";        
        }
        mysqli_close($mysqli);
 ?>
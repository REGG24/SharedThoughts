<?php
 if(isset($_POST)){
    $file = $_FILES['image']; //gets all the information from the file
   
    $fileName = $_FILES['image']['name'];//we want to get the name of the file
    $fileTmpName = $_FILES['image']['tmp_name'];//temp location of the file
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];
    $filePath = " ";
    $problemImage = " ";

    $fileExt = explode('.',$fileName); //explode() takes apart something
    $fileActualExt = strtolower(end($fileExt));//so now we have the extension of the file

    $allowed = array('jpg','jpeg','png');
    if(in_array($fileActualExt,$allowed)){
       if($fileError === 0){
         if($fileSize < 2097152){//2MB
            $fileNameNew = uniqid('',true).".".$fileActualExt;//we create a unique new name for the file
            $fileDestination = '../uploads/'.$fileNameNew;//para subir el archivo
            $filePath =  'uploads/'.$fileNameNew; //para guardar la ruta en la base de datos
            move_uploaded_file ($fileTmpName,$fileDestination);//where the tmp location is and where the new location is                      
        }else{
             $problemImage = "Your file is too big";
         }
       }else{
           $problemImage = "There was an error uploading your file!".$fileError;
       }
    }
    else{
        $problemImage = "You cannot upload files of this type!";
    }
 }
?>
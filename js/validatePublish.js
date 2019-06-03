function validate()
   {
    
    var array=[];
    
    //todos los campos donde el usuario pueda meter caracteres de cualquier tipo
    array=[document.forms["Publish"]["title"],
          document.forms["Publish"]["description"],
          document.forms["Publish"]["content"]]; 
    
    var i;
    
    //checar si hay campos vacios
    for(i=0;i<array.length;i++){
        if (array[i].value == "") {
            alert("Empty fields");
            array[i].focus();
            return false;           
        }
    }

    if( document.getElementById("image").files.length == 0 ){
        alert("No image selected");
        return false;
    }
   
    return true;

  }
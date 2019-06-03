function validate()
   {
    
    var array=[];
    
    //todos los campos donde el usuario pueda meter caracteres de cualquier tipo
    array=[document.forms["Account"]["first-name"],
          document.forms["Account"]["last-name"],
          document.forms["Account"]["email"],
          document.forms["Account"]["pass"]]; 
    
    var i;
    
    //checar si hay campos vacios
    for(i=0;i<array.length;i++){
        if (array[i].value == "") {
            alert("Empty fields");
            array[i].focus();
            return false;           
        }
    }
   
    return true;

}
function validate(){  
  var array=[];
  
  //todos los campos donde el usuario pueda meter caracteres de cualquier tipo
  array=[document.forms["Register"]["first-name"],
        document.forms["Register"]["last-name"],
        document.forms["Register"]["email"],
        document.forms["Register"]["pass"]]; 
  
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
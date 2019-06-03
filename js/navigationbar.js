
function displayMenu1(){
    
    if (document.querySelector('.navigation ul').classList.contains('show')){

       document.querySelector('.navigation ul').classList.remove('show');

     }else{

       document.querySelector('.navigation ul').classList.add('show');
       document.querySelector('.navigationSettings').classList.add('show');
     }
      
}



function displayMenu2(){
    
      if (document.querySelector('.navigationSettings').classList.contains('visible')){
            document.querySelector('.navigationSettings').classList.remove('visible');
       }else{
         document.querySelector('.navigationSettings').classList.add('visible');
       }
        
  }


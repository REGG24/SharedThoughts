jQuery('document').ready(function($){
      //este script no funciona en el servidor
     var menuBtn = $('.menu-icon');
     var menu = $('.navigation ul');

     menuBtn.click(function(){
      if(menu.hasClass('show')){
            menu.removeClass('show');
      }
      else{
            menu.addClass('show'); 
      }       
     });

     var settingsBtn = $('.settings');
     var menuSettings = $('.navigationSettings');   
     
     settingsBtn.click(function(){
      if(menuSettings.hasClass('visible')){
            menuSettings.removeClass('visible');
      }
      else{
            menuSettings.addClass('visible'); 
      }       
     });

});
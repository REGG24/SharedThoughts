/* 
  Switch actions
*/
$('.unmask').on('click', function(){
  
    if($(this).prev('input').attr('type') == 'password')
      changeType($(this).prev('input'), 'text');
    
    else
      changeType($(this).prev('input'), 'password');
    
    return false;
  });
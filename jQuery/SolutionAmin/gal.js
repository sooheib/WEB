var nbimage = 2 ; 


var i = 0 ; 
$(document).ready(function(){
  
    
    $('#gal').hide();
    
    
    //si on click sur next
    
    $("#next").click(function(){
        i++; 
        if (i > nbimage ) { i = 0 }   ;
         $('#image').fadeOut(2);
         $('#image').attr("src","imag"+i+".jpg");
         $('#image').fadeIn(300);
    });
    
    
    
    
    //si on click sur prev
    
    
       $("#prev").click(function(){
        i--; 
        if (i < 0) { i = nbimage }   ;
       $('#image').fadeOut(2);
       $('#image').attr("src","imag"+i+".jpg");
       $('#image').fadeIn(300);
    });
    
    
    
    
    
    //si on click sur hide
    
       $("#hide").click(function(){
        i++; 
        if (i > nbimage ) { i = 0 }   ;
       $('#gal').hide();
    });


    
    //suvol afficher 
       $("#amin").mouseover( function () {
           $(this).css("color","green");
           
       });
    
      $("#amin").mouseleave( function () {
           $(this).css("color","black");
           
       });
    
    //click
    
       $("#amin").click( function () {
           $('#gal').show();
           
       });
    
    
    


});
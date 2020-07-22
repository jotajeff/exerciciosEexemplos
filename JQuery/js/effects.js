$(function(){
    $('#showWindow').click(function(){
        $('#janela').fadeIn("slow");
    });

});


$(function(){
    $('#hideWindow').click(function(){
        $('#janela').fadeOut("slow");
    });

});


$(function(){
    $('#toggleWindow').click(function(){
        $('#janela').toggle("slow");
    });

});


$( "#clickme" ).click(function() {
    $( "#janela" ).fadeIn( "slow", function() {
      // Animation complete
    });
  });
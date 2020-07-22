$(document).ready(function(){

    $('body').css('margin-top', '1.0em');

    $('body').css('font-size', '1.4em');

    //$('.jumbotron').css('display','none');
    
    $('.jumbotron').hide();

    $('section').css('background-color','#cacaca');
    
    $('#title').html("JQuery - School of Net").css('color', '#ffaa33');
    
    $('#desc').html("Append - Prepend ");

    $('section').append("<p>Texto adicinando dinamicamente Depois do paraágrafo</p>");

    $('section').prepend("<p>Texto adicinando dinamicamente Antes do Parágrafo</p>");

    $('section').append("<button class='btn btn-primary' id=show>Show</button>");
    
    $('section').append("<button class='btn btn-primary' id=hide>Hide</button>");
    
    $('section').append("<button class='btn btn-primary' id=toggle>Toggle</button>");

    $('section').append("<button class='btn btn-primary' id=layout>Layout</button>");

    $('section').append("<p id='myTest'>Testing Show Hide toggle</p>");

    
    $('#show').click(function(){
       $('#myTest').show();
    });
    
    $('#hide').click(function(){
       $('#myTest').hide();
    });
    
    $('#toggle').click(function(){
       $('#myTest').toggle();
    });
   
    $('#layout').click(function(){
        $('section').addClass('shadow');
    });

});

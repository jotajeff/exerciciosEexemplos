$(document).ready(function(){
    
    $('.bg-black').css('background', 'black');

    $('#title').html("JQuery - School of Net").css('color', '#ffaa33');
    
    $('#desc').html("Mouse events .. ");

    $('#click').click(function(){
        alert('Clicou !');
        $(this).css('background', 'grey').html("Já clicou !");
    });
    
    $('#dblclick').dblclick(function(){
        alert(' Take easy !');
        $(this).css('background', 'grey').html(" Take easy !");
    });
    
    $('#mouseenter').mouseenter(function(){
        alert(' Was here !');
        $(this).css('background', 'grey').html(" Was here !");
    });
    
    $('#mouseleave').mouseleave(function(){
        alert(' Please, dont go !');
        $(this).css('background', 'grey').html(" Please , dont go  !");
    });
    
    // events Keyboard

    $('#keypress').keypress(function(){
        $('#eventKey').html('Testing keypress ->'+$(this).val()).css("color", "white");
    });
    
    
    $('#keydown').keydown(function(){
        $('#eventKey').html('Testing keydown ->'+$(this).val()).css("color", "white");
    });
    
    $('#keyup').keyup(function(){
        $('#eventKey').html('Testing keyup ->'+$(this).val()).css("color", "white");
    });

});

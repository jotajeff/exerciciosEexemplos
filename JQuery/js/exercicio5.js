$(document).ready(function(){

    $('#title').html('jQuery - School of Net');
    $('#desc').html('Starting with jQuery');
    $('#header').addClass('header btn btn-info');
    $('#header').removeClass('btn btn-info');
    $('#header').css('height','60px');
    $('#header').css('padding','10px');
    $('#title').css('margin-top','0');
    $('#title').css('margin-bottom','0');
    $('#desc').css('margin-top','0');
    $('main').css('padding','20px');
 
    $('main').append('<p id="test">Test Animate!</p>');
    $('main').append('<button id="animatebtn">Animate</button>');
    $('#test').css('border','1px solid green');
    $('#test').css('width','100px');
    $('#test').css('text-align','center');
 
    $('#animatebtn').click(function () {
       $('#test').animate({
           fontSize: '4em',
           borderWidth: '10px',
           width: '70%'
       },2000, function () {
           $(this).css('border-color', 'red');
       });
    });
 
 });
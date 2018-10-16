$(document).ready(function() {
  $( window ).on( "load", function() {
    $("#loader").delay(1000).fadeOut("slow");
    });
  $('.menu-toggle').click(function(){
    $('nav').toggleClass('active');
  });
  $('ul li').click(function() {
    $(this).siblings().removeClass('active');
    $(this).toggleClass('active');
  });
});

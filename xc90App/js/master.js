$( document ).ready(function() {
  $('.honda').hide();
  $('.acura').hide();

  $( "#bmw" ).hover(function() {
    $('.honda').hide();
    $('.acura').hide();
    $('.bmw').show();
    });
  $( "#honda" ).hover(function() {
    $('.bmw').hide();
    $('.acura').hide();
    $('.honda').show();
    });

  $( "#acura" ).hover(function() {
    $('.honda').hide();
    $('.bmw').hide();
    $('.acura').show();
  });
});

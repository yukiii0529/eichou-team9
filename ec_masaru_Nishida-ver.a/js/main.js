$(function(){
  $('#yes').click(function() {
    $("#min_price").css({
      
      "visibility": "inherit"
      
    });
  });

  $('#no').click(function() {
    $("#min_price").css({
      "visibility": "hidden"
      
    });
  });
});
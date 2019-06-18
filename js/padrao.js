/*
$(document).ready(function(){
  var scroll_start = 0;
  var startchange = $('#about');
  var offset = startchange.offset();

  if(startchange.length){
    $(document).scroll(function(){
      scroll_start = $(this).scrollTop();

      if(scroll_start>offset.top){
        $('.navbar').css('background-color', '#D8D8D8');
        //$(".navbar").removeClass("navbar-dark");
        //$(".navbar").addClass("navbar-light");
      }else{
        $('.navbar').css('background-color', '#E55166');
        //$(".navbar").removeClass("navbar-light");
        //$(".navbar").addClass("navbar-dark");

      }
    })
  }
})
*/
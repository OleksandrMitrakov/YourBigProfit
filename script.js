$(document).ready(function () {

  $(document).on("scroll", function (){
    if($(window).scrollTop() === 0)
      $("header").removeClass("fixed");
    else
      $("header").attr("class", "fixed");
  });

  $(document).on("scroll", function (){
    if($(window).width() > 500)
      $("#menu ul").removeAttr("style");
  });

  $('#nav-icon').click(function(){
      $(this).toggleClass('open');
      $('#menu ul').slideToggle(500);
    });

    $('#menu li a').click(function(){
      $('#menu ul').hide();
      $('#nav-icon').removeClass('open');
    });

    $('#logo span').click(function(){
      $('#menu ul').hide();
      $('#nav-icon').removeClass('open');
    });

    $(window).resize(function(){
      if($(window).width() > 500) {
        $('#menu ul').removeAttr('style');
      }
    });
});


// underline css hover navbar
$('.js-tab-underline').css('width', $('.js-tab-link.active').outerWidth());

$(".js-tab-link").click(function(e){
  e.preventDefault();
  $(".js-tab-link").removeClass("js-active-tab");
  $(this).addClass("js-active-tab");

  var current = $(this),
  position = current.position();
  $('.js-tab-underline').css('left', position.left);
  $('.js-tab-underline').css('width', $(this).outerWidth());
});

// function
$(document).ready(function() {

// slider img
 $('.slider-img').slick({
  dots:true,
  cssEase: 'ease-in-out',
  fade:true,
  arrows: true,
  responsive: [
    {
      breakpoint: 330,
      settings: {
        arrows: false
      }
    }
  ]
 });

 $('.qoute-item').slick({
  arrows: false,
  dots: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2500,
 });

 $('.gallery-marathon').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 670,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

// margin-top new on mobile
$(window).width (function(){     
 if  ($(window).width() <= 670){
  var heightnew =  $("#new-side-list > .container > .row > .col-sm-3").height();
  $("#new-side-list > .container > .row > .col-sm-9").css("margin-top", heightnew + "px");
}else{
  $("#new-side-list > .container > .row > .col-sm-9").css("margin-top","0px");
}
});

// back to top
$(window).scroll(function () {
  if ($(this).scrollTop() > 50) {
    $('#back-to-top').fadeIn();
  } else {
    $('#back-to-top').fadeOut();
  }
});
$('#back-to-top').click(function () {
  $('#back-to-top').tooltip('hide');
  $('body,html').animate({
    scrollTop: 0
  }, 800);
  return false;
});

//add class 
$( "#new-side-content .tab-pane:first" ).addClass( "active show" );
$( "#v-pills-tab .nav-link:first" ).addClass( "active show" );

$( "#new-side-content-2 .tab-pane:first" ).addClass( "active show" );
$( "#v-pills-tab-2 .nav-link:first" ).addClass( "active show" );
// $('[href*="10"]').addClass( "active show" );

// menu overlay
$(document).ready(function(){
  $(".menu-overlay").click(function(){
    $(".content-overlay").fadeToggle();
  });

  $(".content-overlay").click(function(){
    $(".content-overlay").fadeToggle();
  });
});

// add color to text after check
$('#checkRules').click(function () {
  if ($('#checkRules').prop('checked')) {
    $('.label-check-ok').css('color', '#262626');
  } else {
    $('.label-check-ok').css('color', '');
  }
});

// add color to text after check
$('#checkRules2').click(function () {
  if ($('#checkRules2').prop('checked')) {
    $('.label-check-ok-2').css('color', '#262626');
  } else {
    $('.label-check-ok-2').css('color', '');
  }
});

// tooltip boostrap 
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// ease scroll
$("html").easeScroll();

});



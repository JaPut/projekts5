jQuery(document).ready(function($) {
 
  //Check to see if the window is top if not then display button
 $(window).scroll(function(){

  // Show button after 500px
  var showAfter = 500;
  if ( $(this).scrollTop() > showAfter ) { 
   $('#myBtn').fadeIn();
  } else { 
   $('#myBtn').fadeOut();
  }
 });

 $(window).scroll(function() {
 
  if($(window).scrollTop() + $(window).height() > $(document).height() - 50) {
      $('#header').hide();
  }else { 
    $('#header').show();
   }
});

 //Click event to scroll to top
 $('#myBtn').click(function(){
  $('html, body').animate({scrollTop : 0},100);
  return false;
 });

 //show/hide about
 $("#ka").click(function(){
  $(".hide1").show(800);
  $(".que, .hide2, .hide3, .hide4").hide();
  $('.about').css({
    'padding-top': '5vh'
  });
});
 $("#kapec").click(function(){
  $(".que, .hide1, .hide3, .hide4").hide();
  $(".hide2").show(800);
  $('.about').css({
    'padding-top': '5vh'
  });
});
 $("#kadaveida").click(function(){
  $(".que, .hide1, .hide2, .hide4").hide();
  $(".hide3").show(800);
  $('.about').css({
    'padding-top': '5vh'
  });
});
 $("#kas").click(function(){
  $(".que, .hide1, .hide2, .hide3").hide();
  $(".hide4").show(800);
  $('.about').css({
    'padding-top': '5vh'
  });
});

// show hide fakti
$('#aks').click(function(){
$('#fakti').show(1800);
$('#aks').hide(300);
$('.phy').css({
  'padding-top': '5vh'
});
$('.phy p').css({
  'text-align': 'left'
});
});

// hide spon
$('#aizv, #aizvsp, #aizvne').click(function(){
$('#fakti, #sponk, #spong, #needsr, #needsf, #needs').hide(500);
$('.phy p').css({
  'text-align': 'center'
});
$('html, body').animate({
  scrollTop: $("#needstit").offset().top
}, 100);
$('#aks').show(300);
});

//hide fakti
$('#aizv').click(function(){
$('#fakti').hide(500);
$('.phy').css({
  'padding-top': '25vh'
});
$('.phy p').css({
  'text-align': 'center'
});
$('html, body').animate({
  scrollTop: $("#phy").offset().top
}, 100);
$('#aks').show(300);
});

// show hide spon needs
$('#spon1').click(function(){
$('#spong').show(600);
$('#needs').show(500);
$('#sponk').hide(500);
$('#needsr').hide(500);
$('#needsf').hide(500);
$('html, body').animate({
  scrollTop: $("#needs").offset().top
}, 100);
});

$('#spon2').click(function(){
$('#sponk').show(500);
$('#needs').show(500);
$('#spong').hide(500);
$('#needsr').hide(500);
$('#needsf').hide(500);
$('html, body').animate({
  scrollTop: $("#needs").offset().top
}, 100);
});

$('#needs1').click(function(){
$('#needsr').show(500);
$('#needs').show(500);
$('#needsf').hide(500);
$('#sponk').hide(500);
$('#spong').hide(500);
$('html, body').animate({
  scrollTop: $("#needs").offset().top
}, 100);
});

$('#needs2').click(function(){
$('#needsf').show(500);
$('#needs').show(500);
$('#needsr').hide(500);
$('#sponk').hide(500);
$('#spong').hide(500);
$('html, body').animate({
  scrollTop: $("#needs").offset().top
}, 100);
});

// show/hide que1
$('#btnn').click(function(){
  $('#myDIV').show();
  $('#btnn').hide();
  $('#btnn2').hide();
  $('#btnn3').hide();
  $('html, body').animate({
    scrollTop: $("#myDIV").offset().top
  }, 100);
});

$('#btnn2').click(function(){
  $('#myDIV2').show();
  $('#btnn').hide();
  $('#btnn2').hide();
  $('#btnn3').hide();
  $('html, body').animate({
    scrollTop: $("#myDIV2").offset().top
  }, 100);
});

$('#btnn3').click(function(){
  $('#myDIV3').show();
  $('#btnn').hide();
  $('#btnn2').hide();
  $('#btnn3').hide();
  $('html, body').animate({
    scrollTop: $("#myDIV3").offset().top
  }, 100);
});

});

// Slideshows
var slideIndex = 1;
  
function plusDivs(n) {
  slideIndex = slideIndex + n;
  showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);
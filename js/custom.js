// JavaScript Document
jQuery(document).ready(function( $ ) {
	new WOW().init();
	
	// Hero rotating texts
	$("#hero .rotating").Morphext({
	animation: "rubberBand",
	separator: ",",
	speed: 3000
	});
	// Hero rotating texts
	$("#hero .tos").Morphext({
	animation: "rubberBand",
	separator: ",",
	speed: 3000
	});
	
	
	//Materialbox initializing
	$('.materialboxed').materialbox();
	
	
	  // Stick the header at top on scroll
  	$("#header").sticky({topSpacing:0, zIndex: '50'});
	
	// To make the preloader to disappear
	setTimeout(function(){
		$('body').addClass('loaded');
    }, 1500);
	
	//toggle the mobile nav
		$(".open_button").click(function(){
			$(".side_nav").css({right: "0"});
			$(".overlay").css({left: "0"});
		});
		$(".close_button, .overlay").click(function(){
			$(".side_nav").css({right: "-45%"});
			$(".overlay").css({left: "100%"});
		});

	
	
	/*$(function(){
		$("#item").on("click", function(){
			$("#submenu").slideToggle(300);
		});
	});*/
	
	$(function(){
		$("#side_item").on("click", function(){
			$("#side_submenu").slideToggle(300);
		});
	});
	
	// Smoth scroll on page hash links
	$('a[href*="#"]:not([href="#"])').on('click', function() {
	  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  if (target.length) {
			  
			  var top_space = 0;
			  
			  if( $('#header').length ) {
				top_space = $('#header').outerHeight();
			  }
			  
			  $('html, body').animate({
				  scrollTop: target.offset().top - top_space
			  }, 1500, 'easeInOutExpo');
	
			  if ( $(this).parents('.nav-menu').length ) {
				$('.nav-menu .menu-active').removeClass('menu-active');
				$(this).closest('li').addClass('menu-active');
			  }
	
			  if ( $('body').hasClass('mobile-nav-active') ) {
				  $('body').removeClass('mobile-nav-active');
				  $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
				  $('#mobile-body-overly').fadeOut();
			  }
			  
			  return false;
		  }
	  }
	});
	
	// Back to top button
	$(window).scroll(function() {
	
	  if ($(this).scrollTop() > 100) {
		  $('.back-to-top').fadeIn('slow');
	  } else {
		  $('.back-to-top').fadeOut('slow');
	  }
	  
	});
	$('.back-to-top').click(function(){
      $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
      return false;
    });
	
	
	
	
	
	
	$('.content').richText();
	
	/*$('.content').richText({
  // text formatting
  bold: true,

  italic: true,

  underline: true,

 

  leftAlign: true,

  centerAlign: true,

  rightAlign: true,

 

  // lists

  ol: true,

  ul: true,

  // title

  heading: true,

  // colors

  fontColor: false,

 

  // uploads

  imageUpload: true,

  fileUpload: true,

 

  // link

  urls: true,


  table: true,

  removeStyles: true,

  code: true,

  colors: [],

  fileHTML: '',

  imageHTML: ''

});*/

		
});

/*$(window).on('load', function() {
    $('#preloader').delay(100).fadeOut('slow',function(){$(this).remove();});
	$('body').delay(3000).addClass('loaded');
  });*/














jQuery(document).ready(function( $ ){
       

    });

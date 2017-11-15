// JavaScript Document
jQuery(document).ready(function( $ ) {
	new WOW().init();
	
	$('ul.tabs').tabs();
	
	
	/*$('.tab1').click(function(){
      $('ul.tabs').tabs('select_tab', 'test2');
      return false;
    });*/
	
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
	$(function(){
		$(".open_button").click(function(){
			$(".side_nav").css({right: "0"});
			$(".overlay").css({left: "0"});
		});
		$(".close_button, .overlay").click(function(){
			$(".side_nav").css({right: "-45%"});
			$(".overlay").css({left: "100%"});
		});
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
	
	/*Message subscribers function */
	$('#msg_subscribers_form').on('submit', function(){
	var subject = $('#msg_sub_subject').val();
	var message = $('#msg_sub_message').val();
	$.post('../data_process.php', { sub_message:message, subject: subject}, function(success){
	  
	  $('#success_sub_message').html(success);
	});

	$(this).find("input, textarea").val("");
	return false;
	});

	//Delete button confirmation
	$('#del-btn').click(function(){
		if(confirm("Are you sure you want to delete this item?")){
			return true;
		}else{
			return false;
		}
	});
		
});

/*$(window).on('load', function() {
    $('#preloader').delay(100).fadeOut('slow',function(){$(this).remove();});
	$('body').delay(3000).addClass('loaded');
  });*/












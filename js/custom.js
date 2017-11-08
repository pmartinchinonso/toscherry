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
	
	/*Subscribe function */
	$('#subscribe_form').on('submit', function(){
		var email = $('#subscribe_email').val();
		$.post('data_process.php', { email_sub: email}, function(success){
			$('#success_message').html(success);
		});
		$(this).find("input").val("");
		return false;
	});

	/*Footer message function */
	$('#footer_message_form').on('submit', function(){
		var name = $('#message_name').val();
		var email = $('#message_email').val();
		var message = $('#message_textarea').val();
		$.post('data_process.php', {message_name:name, email:email, message:message}, function(success){
			
			$('#success_email_message').html(success);
		});

		$(this).find("input, textarea").val("");
		return false;
	});

	/*Contact function */
	$('#contact_form').on('submit', function(){
		var name = $('#first_name').val();
		var email = $('#contact_email').val();
		var subject = $('#contact_subject').val();
		var message = $('#contact_message').val();
		$.post('data_process.php', {contact_name:name, email:email, message:message, subject: subject}, function(success){
			
			$('#success_contact_message').html(success);
		});

		$(this).find("input, textarea").val("");
		return false;
	});
		
});

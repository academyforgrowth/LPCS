window.jQuery(document).ready(function($){
	
	'use strict';
	
	//-------------------- jQuery smooth scrolling --------------------//
	
	$('a.smooth-scroll').on('click', function(event) {
		var $anchor		= $(this);
		var offsetTop	= '';
		var elemHeight	= parseInt($('#navigation').height(), 0);
		
		if ($(document).width() >= 769) {
			offsetTop = parseInt($($anchor.attr('href')).offset().top - elemHeight, 0);
		} else {
			offsetTop = parseInt($($anchor.attr('href')).offset().top, 0);
		}
		
		$('html, body').stop().animate({
			scrollTop: offsetTop
		}, 2000,'easeInOutExpo');
		
		event.preventDefault();
	});
	
	//-------------------- End jQuery smooth scrolling --------------------//
	
	
	
	//-------------------- Navigation menu scrollspy to anchor section --------------------//
	
	$('body').scrollspy({
		target: '#navigation .navbar-collapse',
		offset: parseInt($('#navigation').height(), 0)
	});
	
	//-------------------- End navigation menu scrollspy to anchor section --------------------//
	
	
	
	//-------------------- jQuery tooltips --------------------//
	
	$('ul.social li a, .btn-tooltip').tooltip();
	$('.btn-popover').popover();
	
	//-------------------- End jQuery tooltips --------------------//
	
	
	
	//-------------------- Preview images popup gallery with Fancybox --------------------//
	
	$('.fancybox').fancybox({
		loop: false	
	});
	
	//-------------------- End preview images popup gallery with Fancybox --------------------//
	
	
	
	//-------------------- jQuery placeholder for IE --------------------//
	
	$('input, textarea').placeholder();
	
	//-------------------- End jQuery placeholder for IE --------------------//
	
	
	
	//-------------------- jQuery figure hover effect --------------------//
	
	$('figure.figure-hover').hover(
		function() {
			$(this).children('div').fadeIn(200);
			$(this).children('div').children('.icon-hover').animate({
				bottom:0
			}, 200);
		},
		function() {
			$(this).children('div').fadeOut(200);
			$(this).children('div').children('.icon-hover').animate({
				bottom:'100%'
			}, 200);
		}
	);
	
	//-------------------- End jQuery figure hover effect --------------------//
	
	
	
	//-------------------- Embed animation effects to html elements with CSS3 --------------------//
	
	var topOffset = $(window).scrollTop() + ($(window).height()*0.8);
		
	$('.animation, .animation-visible').each(function() {
		var imagePos = $(this).offset().top;
		if (imagePos < topOffset) { $(this).addClass('animated ' + $(this).attr('data-animation')); }
	});
	
	$(window).scroll(function() {
		var topOffset = $(window).scrollTop() + ($(window).height()*0.8);
		
		$('.animation, .animation-visible').each(function() {
			var imagePos = $(this).offset().top;
			if (imagePos < topOffset) { $(this).addClass('animated ' + $(this).attr('data-animation')); }
		});
	});
	
	$(window).resize(function() {
		$(window).scroll(function() {
			var topOffset = $(window).scrollTop() + ($(window).height()*0.8);
			
			$('.animation, .animation-visible').each(function() {
				var imagePos = $(this).offset().top;
				if (imagePos < topOffset) { $(this).addClass('animated ' + $(this).attr('data-animation')); }
			});
		});
	});
	
	//-------------------- End embed animation effects to html elements with CSS3 --------------------//
	
	
	
	//-------------------- Contact form submit process --------------------//
	
	$('.dotstheme-form-contact').submit(function() {
		var $form		= $(this);
		var submitData	= $form.serialize();
		var $email		= $form.find('input[name="email"]');
		var $name		= $form.find('input[name="name"]');
		var $message	= $form.find('textarea[name="message"]');
		var $submit		= $form.find('input[name="submit"]');
		var $dataStatus	= $form.find('.data-status');
		
		$email.attr('disabled', 'disabled');
		$name.attr('disabled', 'disabled');
		$message.attr('disabled', 'disabled');
		$submit.attr('disabled', 'disabled');
		
		$dataStatus.show().html('<div class="alert alert-info"><strong>Loading...</strong></div>');
		
		$.ajax({ // Send an offer process with AJAX
			type: 'POST',
			url: 'process-contact.php',
			data: submitData + '&action=add',
			dataType: 'html',
			success: function(msg){
				if (parseInt(msg, 0) !== 0) {
					var msg_split = msg.split('|');
					if (msg_split[0] === 'success') {
						$email.val('').removeAttr('disabled');
						$name.val('').removeAttr('disabled');
						$message.val('').removeAttr('disabled');
						$submit.removeAttr('disabled');
						$dataStatus.html(msg_split[1]).fadeIn();
					} else {
						$email.removeAttr('disabled');
						$name.removeAttr('disabled');
						$message.removeAttr('disabled');
						$submit.removeAttr('disabled');
						$dataStatus.html(msg_split[1]).fadeIn();
					}
				}
			}
		});
		
		return false;
	});
	
	//-------------------- End contact form submit process --------------------//
	
	
	
	//-------------------- Email subscribe process with AJAX --------------------//
	
	// Checking subcribe form when focus event
	$('.dotstheme-form-subscribe input[type="text"], .dotstheme-form-subscribe input[type="email"]').live('focus keypress', function() {
		var $email = $(this);
		
		if ($email.hasClass('error')) {
			$email.val('').removeClass('error');
		}
		if ($email.hasClass('success')) {
			$email.val('').removeClass('success');
		}
	});
	
	// Subscribe form when submit to database
	$('.dotstheme-form-subscribe').submit(function() {
		var $email	= $(this).find('input[name="email"]');
		var $submit	= $(this).find('input[name="submit"]');
		
		var email_pattern = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i;
		if (email_pattern.test($email.val()) === false) {
			$email.val('Please enter a valid email address!').addClass('error');
		} else {
			var submitData = $(this).serialize();
			$email.attr('disabled','disabled');
			$submit.attr('disabled','disabled');
			$.ajax({ // Subcribe process with AJAX
				type: 'POST',
				url: 'process-subscribe.php',
				data: submitData + '&action=add',
				dataType: 'html',
				success: function(msg) {
					if (parseInt(msg, 0) !== 0) {
						var msg_split = msg.split('|');
						
						if (msg_split[0] === 'success') {
							$submit.removeAttr('disabled');
							$email.removeAttr('disabled').val(msg_split[1]).addClass('success');
						} else {
							$submit.removeAttr('disabled');
							$email.removeAttr('disabled').val(msg_split[1]).addClass('error');
						}
					}
				}
			});
		}
		
		return false;
	});
	
	//-------------------- End email subscribe process with AJAX --------------------//
	
	
	
	//-------------------- Customizer --------------------//
	
	$('#customize .popup-open').click(function() {
		$(this).prev().toggle();
	});
	
	$('#customize .backgrounds-panel a').click(function(e) {
		var $background = $(this).attr('class');
		$('#header').attr('class', $background);
		e.preventDefault();
	});
	
	$('#customize .colors-panel a').click(function(e) {
		var $color = $(this).attr('class');
		$('head').append('<link rel="stylesheet" type="text/css" href="css/colors/' + $color + '.css">');
		e.preventDefault();
	});
	
	//-------------------- End customizer --------------------//

});
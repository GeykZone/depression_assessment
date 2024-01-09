(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height() + 100);
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height()+100);
		});

	};
	fullHeight();

	$(".toggle-password").click(function() {

	  $(this).toggleClass("fa-eye fa-eye-slash");
	  var input = $($(this).attr("toggle"));
	  if (input.attr("type") == "password") {
	    input.attr("type", "text");
	  } else {
	    input.attr("type", "password");
	  }
	});

})(jQuery);


function login()
{
	let email = $("#email-field");
	let password = $("#password-field");
	var isCheckboxChecked = $('#remember_me_checkbox').prop('checked');
	let lognow = true;
	// Regular expression for email validation
	var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

	// Check if the entered email matches the pattern
	if (emailRegex.test(email.val()) == false) {
		email.addClass("is-invalid");
		lognow = false;
	}

	if (password.val().length < 1)
	{
		password.addClass("is-invalid");
		lognow = false;
	}

	if(lognow)
	{
		let postEmail = email.val();
		let postPasswork = password.val();
		let postIsChecked = isCheckboxChecked;
	}
}





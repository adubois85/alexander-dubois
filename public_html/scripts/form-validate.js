$(document).ready(function(){

	/* begin validation*/
	$("#contact-form").validate({

		// setup handling of form errors
		debug: true,
		errorClass: "alert alert-danger",
		errorLabelContainer: "#output-area",
		errorElement: "div",

		// rules define what is good/bad input
		// each rule starts with the form input element's NAME attribute
		rules: {
			'contact-name': {
				required: true
			},
			'contact-email': {
				email: true,
				required: true
			},
			'contact-body': {
				required: true,
				maxlength: 4000
			}
		},

		// error messages to display to the end user
		messages: {
			'contact-name': {
				required: "Please enter your name."
			},
			'contact-email': {
				email: "Please enter a valid email address.",
				required: "Please enter a valid email address."
			},
			'contact-body': {
				required: "Please enter a message.",
				maxlength: "Your message can't be more than 4000 characters."
			}
		},

		submitHandler: function(form) {
			$("#contact-form").ajaxSubmit({
				type: "POST",
				url: $("#contact-form").attr("action"),

				success: function(ajaxOutput) {
					// clear the output area's formatting
					$("#output-area").css("display", "");

					// write the server's reply to the output area
					$("#output-area").html(ajaxOutput);

					// reset the form if it was successful
					if($(".alert-success").length >= 1) {
						$("#contact-form")[0].reset();
					}
				}
			})
		}

	});/* end validate function */

});/*end document.ready()*/
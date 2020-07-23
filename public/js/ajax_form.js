$(document).ready(function(){

	$("#ajax_form_contact").submit(function() {
		$(".email-message").empty();
		$(".fullname-message").empty();
		$(".postcode-message").empty();
		$(".phonenumber-message").empty();

		event.preventDefault();
		var post_url = $(this).attr("action");
		var form_data = $(this).serialize();

		$.post( 
			post_url, 
			form_data, 
			function(response) {
				$(".email-message").html(response.email);
				$(".fullname-message").html(response.fullName);
				$(".postcode-message").html(response.postCode);
				$(".phonenumber-message").html(response.phoneNumber);
				if (response.success) {
					$("#success-screen").addClass('d-block')
					$("#form-container").addClass('d-none')
				}			
			},
			'JSON');
	})

	$("#ajax_form_login").submit(function() {
		$(".username-message").empty();
		$(".password-message").empty();

		event.preventDefault();
		var post_url = $(this).attr("action");
		var form_data = $(this).serialize();

		$.post( 
			post_url, 
			form_data, 
			function(response) {
				$(".username-message").html(response.username);
				$(".password-message").html(response.password);
			},
			'JSON')
			.done(function(response) {
				if (response.success) {
					window.location.href = '/admin';
				}
			})
		})


})

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
					$("#successSection").addClass('d-block')
					$("#formSection").addClass('d-none')
				}			
			},
			'JSON');
	})
})

$( document ).ready(function() {
	
    // this is going to grab the registration fields and push to the controller
	$('#registration-form').on('click', '#submit-reg', function(e) {
		e.preventDefault();
		var data = $("#registrationform :input").serializeArray(); // get the form data
		$.ajax({
			url: 'user/register',
			method: 'POST',
			data: { data : data },
			success:function(data){
				console.log("success");
			},	
		});
	});
	
});
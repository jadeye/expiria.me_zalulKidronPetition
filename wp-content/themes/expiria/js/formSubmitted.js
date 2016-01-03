jQuery(document).ready(function($){

    // hide messages 
    $("#sent-form-msg").hide();

	$("#regForm").submit(function(e){
		e.preventDefault();
//		console.log("SUCCESS_formSubmitted function");
		var name = $("input#fullname").val();
		var email = $("input#email").val();
		var phone = $("input#phone").val();
		var dataString = 'name="'+ name
		                + '"&email="' + email
		                + '"&phone="' + phone + '"';
		// ajax
		$.ajax({
		    type:"POST",
		    data: dataString,
		    success: success()
		});
	});

    // on success...
     function success(){
        $("#sent-form-msg").fadeIn();
        console.log("SUCCESS sending ajax");
        // $("#contactForm").fadeOut();
     }

    return false;
});

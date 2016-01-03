jQuery(document).ready(function($){

$('#checkme').click(function () {

    if ($(this).is(':checked')) {
        //enable input
        $('#sendBtn').removeAttr('disabled');
        $('#sendBtn').val('לחתימה >>');
    } /*else {
        //disable input
        $('#sendBtn').attr('disabled', true);
        $('#sendBtn').val('אנא אשרו רשימת דיוור בתיבה למטה');
    }*/
});

    // hide messages 
    $("#sent-form-msg").hide();

	$("#regForm").submit(function(e){
		e.preventDefault();
		// console.log("SUCCESS_formSubmitted function");
		var name = $("input#fullname").val();
		var email = $("input#email").val();
		var phone = $("input#phone").val();
		if ($('#checkme').is(":checked")) {
			var agree = 1;
		} else {
			var agree = 0;
		}
		console.log("AGREE = " + agree);
		if (phone.charAt(3) == "-") {
                     phone = phone.slice(0,3) + phone.slice(4);
                } else if (phone.charAt(2) == "-") {
                     phone = phone.slice(0,2) + phone.slice(3);
                };
		var dataString = 'name='+ name
		                + '&email=' + email
		                + '&phone=' + phone
				+ '&agree=' + agree;
		// ajax
		$.ajax({
		    type:"POST",
	            url: "signform.php",
		    data: dataString,
		    success: success()
		});
	});


    // on success...
     function success(){
        $("#sent-form-msg").fadeIn();
        $("#fullname").val("");
        $("#email").val("");
        $("#phone").val("");
        setTimeout(function() {
            $("#sent-form-msg").fadeOut();
        }, 3000);

        //console.log("SUCCESS sending ajax");
     }

    return false;
});

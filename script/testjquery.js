function checkFormContact(){
	var lastName = $('#inputLastName');
	var firstName = $('#inputFirstName');
	var eMail = $('#inputMail');
	var result = false;
	var msg = $('#txtAreaContact');
	if (lastName.val() == "" || firstName.val() == "" || eMail.val() == "" || msg.val() == ""){
		if (lastName.val() == "") {
			lastName.toggleClass("toggleFormClass");
			 $("#spanError1").css("display","inline-block");
		}
		if(firstName.val() == ""){
			firstName.toggleClass("toggleFormClass");
			$("#spanError2").css("display","inline-block");
		}
		if(eMail.val() == ""){
			eMail.toggleClass("toggleFormClass");
			$("#spanError3").css("display","inline-block");
		}
		if (msg.val() == ""){
			msg.toggleClass("toggleFormClass");
			$("#spanError4").css("display","inline-block");
		}
	} 
	else 
	{
		result = true;
	}
	return result;
}	
$('#formContact').submit(checkFormContact);
$('#inputLastName').focus(function(){
	$(this).removeClass("toggleFormClass");
	$("#spanError1").css("display","none");
});

$('#inputFirstName').focus(function(){
	$(this).removeClass("toggleFormClass");
	$("#spanError2").css("display","none");
});

$('#inputMail').focus(function(){
	$(this).removeClass("toggleFormClass");
	$("#spanError3").css("display","none");
});

$('#txtAreaContact').focus(function(){
	$(this).removeClass("toggleFormClass");
	$("#spanError4").css("display","none");
});


(function($){
        $(window).on("load",function(){
            $(".aboutSidebar").mCustomScrollbar();
            $(".divAbout").mCustomScrollbar();
            $(".mentionSection").mCustomScrollbar();
        });
    })(jQuery);





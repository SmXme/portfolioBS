function checkFormContact(){
	var lastName = $('#inputLastName');
	var firstName = $('#inputFirstName');
	var eMail = $('#inputMail');
	var result = false;
	var msg = $('#txtAreaContact');
	if (lastName.val() == "" || firstName.val() == "" || eMail.val() == "" || msg.val() == ""){
		if (lastName.val() == "") {
			lastName.toggleClass("toggleFormClass");
		}
		if(firstName.val() == ""){
			firstName.toggleClass("toggleFormClass");
		}
		if(eMail.val() == ""){
			eMail.toggleClass("toggleFormClass");
		}
		if (msg.val() == ""){
			msg.toggleClass("toggleFormClass");
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
});

$('#inputFirstName').focus(function(){
	$('#inputFirstName').removeClass("toggleFormClass");
});

$('#inputMail').focus(function(){
	$('#inputMail').removeClass("toggleFormClass");
});

$('#txtAreaContact').focus(function(){
	$('#txtAreaContact').removeClass("toggleFormClass");
});


function checkFormContact(){
	var lastName = $('#inputLastName');
	var firstName = $('#inputFirstName');
	var eMail = $('#inputMail');
	var result = event.preventDefault();
	var msg = $('#txtAreaContact');
	console.log('début '+result);
	if (lastName.val() == "" || firstName.val() == "" || eMail.val() == "" || msg.val() == ""){
		if (lastName.val() == "") {
			lastName.css("background-color","rgba(224, 76, 15,1)");
		}
		if(firstName.val() == ""){
			firstName.css("background-color","rgba(224, 76, 15,1)");
		}
		if(eMail.val() == ""){
			eMail.css("background-color","rgba(224, 76, 15,1)");
		}
		if (msg.val() == ""){
			msg.css("background-color","rgba(224, 76, 15,1)");
		}
	} 
	else 
	{
		result = true;
	}
	console.log(result);
	return result;
}	
$('#formContact').submit(checkFormContact);


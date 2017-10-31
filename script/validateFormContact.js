function checkFormContact(){
	console.log('HELLO');
	var lastName = document.getElementById('inputLastName');
	var firstName = document.getElementById('inputFirstName');
	var eMail = document.getElementById('inputMail');
	var msg = document.getElementById('txtAreaContact');
	var errorLocation = document.getElementById('errorList');
	var result = false;
	
	if (lastName.value == "" || firstName.value == "" || eMail.value == "" || msg.value == ""){
		errorLocation.innerHTML = "<ul>Veuillez corriger les erreurs suivantes afin d'envoyer le formulaire de contact :";
		if (lastName.value == "") {
			errorLocation.innerHTML+='<li>Compléter le champ "Nom"</li>';
		}
		if(firstName.value == ""){
			errorLocation.innerHTML+='<li>Compléter le champ "Prénom"</li>';
		}
		if(eMail.value == ""){
			errorLocation.innerHTML+='<li>Compléter le champ "Email"</li>';
		}
		if (msg.value == ""){
			errorLocation.innerHTML+='<li>Compléter le champ "Message"</li>';
		}
		errorLocation.innerHTML+='</ul>';
	} 
	else 
	{
		result = true;
	}
	return result;
}	
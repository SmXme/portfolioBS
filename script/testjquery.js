$("input[type='text']").on("click",hideErrorContact);
$("input[type='email']").on("click",hideErrorContact);
$("textarea").on("click",hideErrorContact);
$("input[type='submit']").on("click",showErrorContact);

function showErrorContact () {
	$("#errorList").css("display","block");
}
function hideErrorContact () {
	$("#errorList").css("display","none");
}

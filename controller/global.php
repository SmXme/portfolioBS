<?php		
if($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['page'])){
	switch ($_GET['page']) {
		case "accueil":
			include 'view/accueil.php';
			break;
		case "contact":
			include 'view/contact.php';
			break;
		case "about":
			include 'view/about.php';
			break;
		case "mentions":
			include 'view/mentions.php';
			break;
		case "projects":
			include 'view/projects.php';
						break;
		default:
			include 'view/accueil.php';
	}
}else include 'view/accueil.php';
?>
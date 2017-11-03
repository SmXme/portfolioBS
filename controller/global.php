<?php		

$accueilON = $aboutON = $contactON = $projectsON = $mentionsON = "";
if($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['page'])){
	switch ($_GET['page']) {
		case "accueil":
			$accueilON = "id='pageActive'";
			$includePage = 'view/accueil.php';
			break;
		case "contact":
			$contactON = "id='pageActive'";
			$includePage = 'view/contact.php';
			break;
		case "about":
			$aboutON = "id='pageActive'";
			$includePage = 'view/about.php';
			break;
		case "mentions":
			$mentionsON = "id='pageActive'";
			$includePage = 'view/mentions.php';
			break;
		case "projects":
			$projectsON = "id='pageActive'";
			$includePage = 'view/projects.php';
			break;
		default:
			$accueilON = "id='pageActive";
			$includePage = 'view/accueil.php';
	}
}else{
	$accueilON = "id='pageActive";
	$includePage = 'view/accueil.php';
} 

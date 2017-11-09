<nav id="mainNav" class="Roboto bg-myBlue font-weight-bold ">
	<ul class="nav nav-pills justify-content-md-between justify-content-lg-around text-center align-items-center">
		<li class="nav-item">
			<a <?php echo $accueilON?> class="nav-link" href="index.php?page=accueil">ACCUEIL</a>
		</li>

		<!-- class="dropdown" -->
		<li class="nav-item"> 

			<!-- class ="dropdown-toggle" data-toggle="dropdown" -->
			<a <?php echo $aboutON?> class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false" href="index.php?page=about">QUI SUIS-JE ?</a>
<!-- 			<div id ="divDropDown" class="text-center">
				<a class="dropdown-item" href="index.php?page=about">MON PARCOURS</a>
				<a class="dropdown-item" href="index.php?page=about">MES COMPÉTENCES</a>
			</div> -->
		</li>
		<li class="nav-item">
			<a <?php echo $projectsON?> class="nav-link" href="index.php?page=projects">MES RÉALISATIONS</a>
		</li>
		<li class="nav-item">
			<a <?php echo $contactON?> class="nav-link" href="index.php?page=contact">ME CONTACTER</a>
		</li>
	</ul>
</nav>
<section class="row mainSection">
	<aside class="col d-none d-xl-block pr-0-">
		<img id="contactSilhouette" src="images/silhouette_bye_1.png" alt="Silhouette Contact Auteur">
	</aside>
	<div id="divFormContact" class="col d-flex justify-content-center align-items-center">
		<form id="formContact" class="text-center" method="POST" action="controller/actionContact.php">
			<fieldset class="form-group form-control pr-4 pl-4">
				<legend class="txtOrange w-75"><h2>Contactez-moi</h2></legend>
				<div class="form-row form-group">
					<div class="col">
						<input type="text" name="inputLastName" id="inputLastName" class="form-control form-control-lg" placeholder="Nom">
					</div>
					<div class="col">
						<input type="text" name="inputFirstName" id="inputFirstName" class="form-control form-control-lg" placeholder="Prénom">
					</div>
				</div>
				<div class="form-row  form-group">
					<div class="col">
						<input type="email" class="form-control form-control-lg" name="inputMail" id="inputMail" placeholder="Email">
					</div>
				</div>
				<div class="form-row form-group">
					<div class="col">
						<textarea rows=7 maxlength="250" name="txtAreaContact" id="txtAreaContact" class="form-control form-control-lg" placeholder="Message (250 caractères max)."></textarea>
					</div>
				</div>
				<div class="form-row form-group justify-content-center">
					<input type="submit" name="inputSubmit" class="btn btn-outline-danger" id="btn-outline-orange">
				</div>
			</fieldset>
		</form>
	</div>
</section>
	
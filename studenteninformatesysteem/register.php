<?php
include_once('app/templates/bovenstuk.php');
?>
		<div class="container login-container">
			<div class="row">
				<form class="mainColor logForm" action="app/script/registration.php" method="POST">
					<div class="form-group">
						<input name="vnaam"type="text" class="form-control w-75 top-10 horizontalCentre" placeholder="Voornaam">
					</div>
					<div class="form-group">
						<input name="anaam"type="text" class="form-control w-75 top-10 horizontalCentre" placeholder="Achternaam">
					</div>
					<div class="form-group">
						<input name="semail"type="text" class="form-control w-75 top-10 horizontalCentre" placeholder="School email">
					</div>
					<div class="form-group">
						<input name="pemail"type="text" class="form-control w-75 top-10 horizontalCentre" placeholder="Prive email">
					</div>
					<div class="form-group">
					<input required type="date" name="datum" id="datum">
					</div>
					<div class="text-center">
						<input type="submit" class="btn color-white bg-light center-block col-lg-offset-4" value="Login">
					</div>
					<div class="text-center">
					<input required type="text" id="mobiel" placeholder="Telefoonnummer" name="mobiel"><br>
					</div>
					<div class="text-center">
						<a href="login.php" class="text-light text-center">Al een account?</a>
					</div>
				</form>
			</div>
		</div>
<?php
include_once('app/templates/bovenstuk.php');
?>
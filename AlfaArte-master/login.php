<?php
include_once('app/templates/bovenstuk.php');
?>
	<div class="container login-container">
		<div class="row">
			<form class="mainColor logForm">
				<h3 class="text-white title-login">
				Login
				</h3>
				<div class="form-group">
					<input type="text" class="form-control w-75 top-10 horizontalCentre" placeholder="E-mail">
				</div>
				<div class="form-group">
					<input type="password" class="form-control w-75 horizontalCentre" placeholder="Wachtwoord">
				</div>
				<div class="text-center">
					<input type="submit" class="col-sm-12 btn btn-primary bg-light center-block col-lg-offset-4" value="Login">
				</div><br>
				<div class="text-center mt-5">
					<a href="#" class="text-light text-center wachtwoord_vergeten">Wachtwoord vergeten?</a>
				</div>
			</form>
		</div>
	</div>
<?php
include_once('app/templates/onderstuk.php');
<?php
include_once('app/templates/bovenstuk.php');
?>
		<div class="container login-container">
			<div class="row">
				<form class="mainColor logForm">
					<div class="form-group">
						<input type="text" class="form-control w-75 top-10 horizontalCentre" placeholder="Username">
					</div>
					<div class="form-group">
						<input type="password" class="form-control w-75 horizontalCentre" placeholder="Wachtwoord">
					</div>
					<div class="form-group">
						<input type="email" class="form-control w-75 horizontalCentre" placeholder="E-Mail">
					</div>
					<div class="text-center">
						<input type="submit" class="btn color-white bg-light center-block col-lg-offset-4" value="Login">
					</div>
					<div class="text-center">
						<a href="#" class="text-light text-center">Al een account?</a>
					</div>
				</form>
			</div>
		</div>
<?php
include_once('app/templates/onderstuk.php');
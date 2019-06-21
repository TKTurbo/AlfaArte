<?php
include_once('app/templates/bovenstuk.php');
?>
<!-- BEGIN ADMINPANEL -->
<div class="container">
	<div class="page-header">
		<h1 class="text-white">Adminpanel</h1>
	</div>
</div>
<div class="text-center adminPageContainer">
	<form class="col-sm-2 adminItem col-md-offset-2">
		<p class="text-white">Verander wachtwoord.</p>
		<input class="formy form-control" type="text" placeholder="gebruikersnaam">
		<input class="formy form-control" type="password" placeholder="wachtwoord">
		<input class="formy form-control" type="password" placeholder="confirm wachtwoord">
		<input class="formy form-control" type="submit">
	</form>
	<form class="col-sm-2 adminItem text-center">
		<p class="text-white">Maak account.</p>
		<input class="formy form-control" type="text" placeholder="gebruikersnaam">
		<input class="formy form-control" type="password" placeholder="wachtwoord">
		<input class="formy form-control" type="password" placeholder="confirm wachtwoord">
		<input class="formy form-control" type="submit">
	</form>
	<form class="col-sm-2 adminItem text-center">
		<p class="text-white">Nieuwe les in rooster</p>
		<input class="form-control" placeholder="dropdown" type="text">
		<input class="form-control" placeholder="klas" type="text">
		<input class="form-control" type="week" placeholder="week">
		<input class="form-control" type="time" placeholder="van">
		<input class="form-control" type="time" placeholder="tot">
		<input class="form-control" type="submit" placeholder="nieuw rooster">
	</form>
	<form class="col-sm-2 adminItem text-center">
		<p class="text-white">Cijfer</p>
		<input class="form-control" type="text" placeholder="naam">
		<input class="form-control" type="dropdown" placeholder="vak">
		<input class="form-control" type="text" placeholder="cijfer">
		<input class="form-control" type="submit" placeholder="nieuw rooster">
	</form>
</div>
<!-- EINDE ADMINPANEL -->
<?php
include_once('app/templates/onderstuk.php');
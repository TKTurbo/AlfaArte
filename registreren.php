<?php
session_start();
?>
			<form action="app/register/registration.php" method="POST">
			
			<div class="container">

			<label for="account"><b>Voornaam</b></label><br>
			<input class="registerf" type="text" placeholder="Voornaam" name="vnaam" required><br>
           
            <label for="account"><b>hii</b></label><br>
			<input class="registerf" type="text" placeholder="Achternaam" name="anaam" required><br>

			<label for="account"><b>School email naam</b></label><br>
            <input class="registerf" type="text" placeholder="Email" name="semail" required><br>

            <label for="account"><b>Prive Email</b></label><br>
            <input class="registerf" type="text" placeholder="Email" name="pemail" required><br>

            <label for="account">Geboortedatum: </label> <br>
            <input required type="date" name="datum" id="datum"> <br>

            <label for="account"><b>Telefoonnummer</b></label><br>
            <input required type="text" id="mobiel" placeholder="Telefoonnummer" name="mobiel"><br>

            <label for="account"><b>Telefoonnummer ouders</b></label><br>
            <input required type="text" id="mobiel" placeholder="Telefoonnummer ouders" name="mobieloud" ><br>


			<button type="submit" class="registerbtn">Register</button>
			</div>
		

		</div>
		</form>
<?php
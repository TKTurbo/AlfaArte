<?php
include_once('app/templates/bovenstuk.php');
?>

<div class="container">
    <div class="page-header">
        <h1 class="text-white">Personalia</h1>
    </div>
</div>

<div class="container">
    <div class="row text-white">
        <div class="col-md-4 col-sm-12">
            <img class="foto" src="img/bg.jpg" alt="Hier behoort een profielfoto te staan" width="330" height="200"><br><br>
            Naam: <?= $_SESSION['naam'] ?> <br>
            Leerlingnummer: 161212 <br>
        </div>

        <div class="col-md-8 col-sm-12">
            <form action="#" method="post">
                <div class="form-row">
                    <div class="col-sm-6">
                        <br>Voornaam: 
                        <input type="text" class="form-control" placeholder="voornaam">
                    </div>

                    <div class="col-sm-6">
                        <br>Achternaam: 
                        <input type="text" class="form-control" placeholder="achternaam">
                    </div>
                    
                    <div class="col-sm-12">
                        <br>Email: 
                        <input type="email" class="form-control" placeholder="someone@email.nl">
                    </div>

                    <div class="col-sm-12">
                        <br>School email: 
                        <input type="email" class="form-control" placeholder="ab.achternaam@alfa-college.nl">
                    </div>

                    <div class="col-sm-4">
                        <br>Geboortejaar: 
                        <input type="date" class="form-control" value="06-10-2001 ">
                    </div>

                    <div class="col-sm-4">
                        <br>Telefoon: 
                        <input type="phone" class="form-control" placeholder="06 1234 5678">
                    </div>

                    <div class="col-sm-4">
                        <br>Telefoon ouders: 
                        <input type="phone" class="form-control" placeholder="0000 123 456">
                    </div>

                    <div class="col-sm-4">
                        <br>Adres: 
                        <input type="text" class="form-control" placeholder="straatnaam 2">
                    </div>

                    <div class="col-sm-4">
                        <br>Postcode: 
                        <input type="text" class="form-control" placeholder="1234AB">
                    </div>

                    <div class="col-sm-4">
                        <br>Woonplaats: 
                        <input type="text" class="form-control" placeholder="Groningen">
                    </div>
                </div>
                <div class="col-sm-12 mt-5 button">
                    <button class="btn btn-primary">Wijzigingen opslaan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once('app/templates/onderstuk.php');
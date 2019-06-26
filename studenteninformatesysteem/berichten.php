<?php
include_once('app/templates/bovenstuk.php');
?>

<div class="container">

    <div class="row">

        <div class="page-header">

            <h1 class="text-white">Berichten</h1>

        </div>

        <div class="card col-sm-12"> 

            <div class="text-center text-black">

                Momenteel nog geen berichten ontvangen!

            </div>

        </div>
    
    </div>


    <div class="row">

        <div class="card col-sm-12 margin-top-bericht"> 

            <div class="text-center text-black">

                Goedemorgen (naam leerling) u heeft vanmorgen een les gemist, kunt u zichzelf even melden bij de balie.

            </div>

            <div class="col-sm-12 naam">Naam: (Naam leraar)</div>
            <div class="col-sm-12 datum">Datum: 12-06-2019</div>

        </div>

    </div>

    <div class="row card margin-top-bericht margin-bottom-goodlook">

        <form action="#" method="post">

                <div class="col-sm-12">
                    
                    <div class="col-sm-12 padding-top">
                        <h3>Stuur een Bericht</h3>
                    </div>

                    <div class="col-xs-12 margin-bottom-feedback input-group">
                        <input type="text" class="form-control" placeholder="Stuur iemand een  bericht!" name="feedback" aria-describedby="basic-addon1">
                    </div>

                    <div class="col-xs-12 input-group float-left margin-bottom-bericht">
                        
                        Naam: <input type="text" class="form-control" placeholder="Wat is de naam" name="naam">
                    
                    </div>

                    <div class="col-xs-12 input-group float-left margin-bottom-bericht">
                        
                        Klas: <input type="text" class="form-control" placeholder="Welk klas zit hij/zij in" name="klas">
                    
                    </div>

                    <button class="btn btn-primary float-right" name="submit">Stuur Bericht</button>

                </div>

        </form>

    </div>

</div>

<?php
include_once('app/templates/onderstuk.php');
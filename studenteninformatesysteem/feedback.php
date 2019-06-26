<?php
include_once('app/templates/bovenstuk.php');
?>

<div class="container">

        <div class="page-header">
            <h1 class="text-white">Feedback</h1>
        </div>

        <div class="card col-sm-12 margin-bottom-feedback"> 

            <div class="text-center text-black">

                Ik vind dit echt een top programma 

            </div>

            <div class="col-sm-12 naam">Naam: Jantje</div>
            <div class="col-sm-12 datum">Datum: 12-06-2019</div>

        </div>

        <div class="card col-sm-12 margin-bottom-feedback"> 
            <form action="#" method="post" class="margin-bottom-goodlook">
                <!-- <div class="text-center text-black"> -->

                    <div class="col-sm-12 padding-top">
                        <h3>Geef uw Feedback</h3>
                    </div>

                    <div class="col-xs-12 margin-bottom-feedback input-group">
                        <input type="text" class="form-control" placeholder="Geef uw feedback!" name="feedback" aria-describedby="basic-addon1">
                    </div>

                <!-- </div> -->

                <button class="btn btn-primary float-right" name="submit">Geef Feedback</button>                
            </form>
        </div>
            
</div>

<?php
include_once('app/templates/onderstuk.php');
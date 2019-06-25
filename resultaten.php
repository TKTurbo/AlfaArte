<?php
include_once('app/templates/bovenstuk.php');
include_once('app/functionality/results.php');
?>
<!-- BEGIN RESULTATEN -->
<div class="container">
	<div class="page-header">
		<h1 class="text-white">Resultaten</h1>
	</div>
</div>
<div class="contentContainer">
	<table class="table table-bordered cijferTabel"> <!--TODO: met hover als je ziet-->
		<thead>
		<tr>
			<th class="vakCell col-xs-1" scope="col">Vak</th>
			<th class="vakCell cijferCell smallCell" scope="col">Cijfers</th>
			<script>
				for(var i = 0; i < 16; i++){
				    document.write('<th class="smallCell"></th>');
				}
			</script>
		</tr>
		</thead>
		<tr>
			<?php getResults(1); ?>
		</tr>
	</table>
</div>
<!-- EINDE RESULTATEN -->
<?php
include_once('app/templates/onderstuk.php');
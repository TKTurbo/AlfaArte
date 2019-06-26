<?php
include_once('app/templates/bovenstuk.php');
?>
<!-- BEGIN WERKLIJST -->
<div class="container">
	<div class="page-header">
		<h1 class="text-white">Werklijst</h1>
	</div>
</div>
<div class="contentContainer">
	<div class="werkLijstDing">
		<h1>
			Datum - Vak
		</h1>
		<p>
			DESCRTIOJSDKndkjasbdjksabkhjdbaskjdbsajdnsmandnmsandsa
		</p>
	</div>
	<script>
		for(var i = 0; i < 16; i++){
		    document.write('\t<div class="werkLijstDing">\n' +
                '\t\t<h1>\n' +
                '\t\t\tDatum - Vak\n' +
                '\t\t</h1>\n' +
                '\t\t<p>\n' +
                '\t\t\tDESCRTIOJSDKndkjasbdjksabkhjdbaskjdbsajdnsmandnmsandsa\n' +
                '\t\t</p>\n' +
                '\t</div>')
		}
	</script>
</div>
<!-- EINDE WERKLIJST -->
<?php
include_once('app/templates/onderstuk.php');
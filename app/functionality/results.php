<?php

// TODO: database laten werken

function getResults($userid){
	// select * from results where user_id = id
	$results = [
		'cijfers' =>
			[0 => '9', 1 => '10', 2 => '4'],
		'info' =>
			[0 => 'toets', 1 => 'opdracht', 2 => 'presentatie']
	];
	echo '<th class="vakCell" scope="col">Nederlands</th>'; // TODO vak aangeven
	for($i = 0; $i <  sizeof($results['cijfers']); $i++){
		echo '<td scope="col" class="cijferCell">'
			.$results["cijfers"][$i].
			' <span class="cijferInfo">'
			.$results["info"][$i].
			'</span></td>';
	}
}

$test = `		<tr>
			<th class="vakCell" scope="col">Nederlands</th>
			<th class="cijferCell" scope="col">1 <span class="cijferInfo">Bro</span></th>
			<th scope="col">1</th>
			<th scope="col">1</th>
			<th scope="col">1</th>
			<th scope="col">1</th>
		</tr>`;

/*		<tr>
			<th class="vakCell" scope="col">Nederlands</th>
			<th class="cijferCell" scope="col">1 <span class="cijferInfo">Bro</span></th>
			<th scope="col">1</th>
			<th scope="col">1</th>
			<th scope="col">1</th>
			<th scope="col">1</th>
		</tr>
*/
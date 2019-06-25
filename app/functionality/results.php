<?php

// TODO: database laten werken

include('dbFunctions.php');

if(dbConnect()){

	dbQuery('SELECT * FROM resultaten INNER JOIN on user_ID = users.ID');

	$result = dbGetAll();

	print_r($result);
}

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

	$result = [
		'English' =>
			[0 => '9', 1 => '10', 2 => '4'],
                        [0 => 'test1', 1 => 'essay1', 2 => 'test2'],
		'Maths' =>
                        [0 => '9', 1 => '10', 2 => '4'],
			[0 => 'test1', 1 => 'exercise 1', 2 => 'test2'],
	];
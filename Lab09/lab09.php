<?php

header('Content-Type: text/plain');
$all_states = "Mississipi Alabama Texas Massachusetts Kansas";
$states_array = [];
$states1 = explode(" ", $all_states);
$i = 0;

// you can have all this checking in one loop but I don't know why this record guy is an idiot having many foreach loops
// states that end with xas
foreach ($states1 as $state) {
	if (preg_match('/xas$/', $state)){
		$states_array[$i] = ($state);
		$i = $i +1;
		print "\n The states that end with xas: " . $state;
	}
}

// states that begin with k and ends with s
// states that begin with M and ends with s
foreach ($states1 as $state) {
	if (preg_match('/^k.*s$/i', $state)) {
		$states_array[$i] = $state;
		$i = $i + 1;
		echo "\n The state that begins with k and ends with s: " . $state;
	}
	if (preg_match('/^M.*s$/', $state)) {
		$states_array[$i] = $state;
		$i = $i + 1;
		echo "\n The state that begins with M and ends with s: " . $state;
	}
}

//  states that end with a
foreach ($states1 as $state) {
	if (preg_match('/a$/', $state)){
		$states_array[$i] = ($state);
		$i = $i +1;
		print "\n The states that end with a: " . $state;
	}
}

foreach ($states_array as $element => $value) {
	print("\n" . $value . " is the element " . $element);
}
?>
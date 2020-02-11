<?php

function fizzbuzz ($start, $end){

	$i = $start;

while ($i <= $end) {

	$fb = " ";

	if ($i % 3 == 0) {
	$fb .= "Fizz";
	}

	if ($i % 5 == 0) {
	$fb .= "Buzz";
	}

	if ($i % 3 !== 0 && $i % 5 !== 0) {
	$fb .= "$i";
	}

	echo "$fb";
	echo "\n";
	$i++;
	}
}

fizzbuzz($start = 1, $end = 100);

?>
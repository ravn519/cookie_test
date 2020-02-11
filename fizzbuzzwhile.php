<?php

function fizzbuzz ($end = 100, $i = 1){

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

fizzbuzz($end = 100);

?>
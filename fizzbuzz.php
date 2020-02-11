<?php

function fizzbuzz($end = 100){

for ($i = 1; $i <= $end; $i++) {

	if($i % 3 == 0 && $i % 5== 0) {
		echo "FizzBuzz";
		echo "\n";
		}

	elseif($i % 3 == 0) {
		echo "Fizz";
		echo "\n";
		}

	elseif($i % 5 == 0) {
		echo "Buzz";
		echo "\n";
		}

	else{
		echo "$i";
		echo "\n";
	}
}
}

fizzbuzz($end = 100);

?>
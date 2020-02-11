<?php

	function fizzBuzz_1($start, $end){
		for($i = $start; $i <= $end; $i++){
			if($i % 3 === 0 && $i % 5 === 0){
					echo 'FizzBuzz';
			} elseif ($i % 3 === 0) {
					echo 'Fizz';
			} elseif ($i % 5 === 0) {
					echo 'Buzz';
			} else {
					echo $i;
			}
			echo "\n";
		}
	}

	function fizzBuzz_2($start, $end){
		$i = $start;
		while($i <= $end){
			if($i % 3 === 0 && $i % 5 === 0){
					echo 'FizzBuzz';
			} elseif ($i % 3 === 0) {
					echo 'Fizz';
			} elseif ($i % 5 === 0) {
					echo 'Buzz';
			} else {
					echo $i;
			}
			echo "\n";
			$i++;
		}
	}

	fizzBuzz_1(1, 50);
	
	fizzBuzz_2(25, 75);

?>
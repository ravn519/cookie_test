<?php

for ($end = 1; $end <= 100; $end++) {

	if($end % 3 == 0 && $end % 5== 0) {
		echo "FizzBuzz";
		echo "\n";
		}

	elseif($end % 3 == 0) {
		echo "Fizz";
		echo "\n";
		}

	elseif($end % 5 == 0) {
		echo "Buzz";
		echo "\n";
		}

	else{
		echo "$end";
		echo "\n";
	}
}

?>







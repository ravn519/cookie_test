<?php

	class Master {
		/*
		This is an explicit fibonacci function which returns
		the n'th term of the Fibonacci sequence starting with 0, 1...
		*/
		static function explicitFib($n){
			$gold = (1 + sqrt(5)) / 2;
			$binet = (($gold ** $n) - (-1 * $gold) ** (-1 * $n)) / sqrt(5);
			return $binet;
		}
	}

?>
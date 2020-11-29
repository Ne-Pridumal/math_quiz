<?php

require_once 'read.php';

function Desk($inputStr){
	$desk = preg_split("[,\s]", $inputStr);
	$x1 = $desk[0];
	$x2 = $desk[2];
	$y1 = $desk[1];
	$y2 = $desk[3];
	if($x1 == $x2 || $y1 == $y2 || (abs($x1 - $x2) == abs($y1 - $y2))){
		return "yes";
	}
	else{
		return "no";
	}
}


/*
 * @test 2, 2, 2, 5  -- passed
 * @test 2, 2, 5, 2 -- passed
 * @test 1, 1, 8, 8 -- passed
 * @test 1, 1, 5, 3 -- error
 */



function DeskTest($number_tests){
	echo " 1 test - 2, 2, 2, 5 
	\n 2 test - 2, 2, 5, 2 
	\n 3 test - 1, 1, 8, 8 
	\n 4 test - 1, 1, 5, 3 
	\n";
	for ($i = 1; $i <= $number_tests; $i++)
	{
		$test_number = readInput("Enter test number");
		switch ($test_number)
		{
			case 1:
				$test = Desk(readInput("Input point"));
				echo "1 test - 2, 2, 2, 5 ".($test == "yes" ? "passed" : "error").PHP_EOL.PHP_EOL;
				break;
			case 2:
				$test = Desk(readInput("Input point"));
				echo "2 test - 2, 2, 5, 2 ".($test == "yes" ? "passed" : "error").PHP_EOL.PHP_EOL;
				break;
			case 3:
				$test = Desk(readInput("Input point"));
				echo "3 test - 1, 1, 8, 8 ".($test == "yes" ? "passed" : "error").PHP_EOL.PHP_EOL;
				break;
			case 4:
				$test = Desk(readInput("Input point"));
				echo "4 test - 1, 1, 5, 3 ".($test == "no" ? "passed" : "error").PHP_EOL.PHP_EOL;
				break;
		}
	}
}

DeskTest(readInput("Number of tests"));

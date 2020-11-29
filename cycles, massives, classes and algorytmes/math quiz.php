<?php
require_once "read.php";
function sorting($inputString)
{
	$list = preg_split("[\s]", $inputString);
	$count = 0;
	if (strstr($inputString, "stop"))
	{
		$list = array_diff($list,["stop"]);
		foreach ($list as $item)
		{
			if (max($list) == $item)
			{
				$count += 1;
			}
		}
		return $count;
	}
	else{
		return "error";
	}
}

/*
 @test если все числа отрицательные, то считывать наибольшее среди отрицательных
 @test если не написано "stop" то вывести ошибку
*/

function test($testNumber){
	switch ($testNumber)
	{
		case 1:
			$test = sorting(readInput("input"));
			echo "если все числа отрицательные, то считывать наибольшее среди отрицательных ".PHP_EOL.$test;
			break;
		case 2:
			$test = sorting(readInput("input"));
			echo "если не написано 'stop' то вывести ошибку".PHP_EOL.$test;
	}
}
test(readInput("Number of test"));

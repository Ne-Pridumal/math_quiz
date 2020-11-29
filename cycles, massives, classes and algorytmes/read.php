<?php

function readInput(string $quest){
	echo $quest.": ";
	$input = trim(fgets(STDIN));
	switch ($input)
	{
		case "true":
			return true;
		case "false":
			return false;
		case is_numeric($input):
			return +$input;
		case "!stop":
			return null;
		case is_string($input):
			return $input;
		}
}


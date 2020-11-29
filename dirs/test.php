<?php

require_once "read.php";

function testDir(){
	$listTest = ["dirs" => [],"files" => []];
	$direction = opendir(readInput("Ссылка на директорию"));
	while ($element = readdir($direction)){
		if(in_array($element,[".",".."])){
		continue;
		}
		if (is_dir($element))
		{
			$listTest["dirs"][$element] = [
				"is_readable" => is_readable($element),
				"is_writable" => is_writable($element)
			];
		}
		else
		{
			$listTest["files"][$element] = [
				"is_readable" => is_readable($element),
				"is_writable" => is_writable($element),
				"size" => filesize($element),
			];
		}
	}
	closedir($direction);
	print_r($listTest);
}
testDir();


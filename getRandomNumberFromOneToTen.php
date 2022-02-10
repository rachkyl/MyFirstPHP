<?php

function getRandomNumberFromOneToTen(): int
{
	$result = mt_rand(1, 10);

	return $result;
}

$getNumber = getRandomNumberFromOneToTen();

echo 'getNumber: ' . $getNumber . ';' . "<br>";

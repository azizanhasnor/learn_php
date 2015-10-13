<?php

class IcDateParser
{
	static function getDateString($ic)
	{
		$array 	= str_split($ic);
		$array 	= array_slice($array, 0, 6);
		$string  = join('', $array);

		return $string;
	}
}
?>

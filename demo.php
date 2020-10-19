<?php

function total($number)
{
	if ($number == 1) {
		return $number;
	}
	return $number + total($number - 1);
}

echo total(100);

?>
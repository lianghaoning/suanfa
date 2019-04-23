<?php

function number($str)
{
	$str = explode(' ', $str);

	$str = array_reverse($str);

	$str = implode(' ', $str);

	return $str;
}

var_dump(number("student. a am I"));
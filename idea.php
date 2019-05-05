<?php

class test
{
	public static function number($arr,$n,$start,$end)
	{
		$middle_key = floor(($start+$end)/2);
		$middle = $arr[$middle_key];
		// var_dump($middle);die;

		if($middle == $n)
		{
			return $middle_key;
		}

		if($start == $end)
		{
			return false;
		}

		if($middle > $n)
		{
			$end = $middle_key - 1;
			return self::number($arr,$n,$start,$end);
		}

		if($middle < $n)
		{
			$start = $middle_key + 1;
			return self::number($arr,$n,$start,$end);
		}
	}

	// public static function number2($arr2)
	// {

	// }
}

$arr = [12,23,34,45,56];

var_dump(test::number($arr,45,0,count($arr)-1));

// var_dump(test::number2([1,2,3,4,5,6],4));

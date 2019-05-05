<?php

class test
{
	public static function number($arr,$n)
	{
		$start = 0;
		$end = count($arr)-1;

		$middle_key = floor($start+$end)/2;
		$middle = count($arr)/2;
		// var_dump($middle);die;

		if($middle == $n)
		{
			return $middle;
		}

		if($middle > $n)
		{
			$middle = $middle + 1;
			return self::number($arr,$n);
		}

		if($middle < $n)
		{
			$middle = $middle - 1;
			return self::number($arr,$n);
		}
	}

	// public static function number2($arr2)
	// {

	// }
}

var_dump(test::number([1,2,3,4,5,6],2));

// var_dump(test::number2([1,2,3,4,5,6],4));
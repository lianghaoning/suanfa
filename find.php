<?php
//二分算法 折半查找

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
}

$arr = [12,23,34,45,56];

var_dump(test::number($arr,45,0,count($arr)-1));

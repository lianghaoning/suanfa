<?php

function Combine($arr_A,$arr_B)
{
	$arr_A = count($arr_A); //计算数组1的长度
	$arr_B = count($arr_B); //计算数组2的长度

	$temp = 0;

	foreach($arr_A as $k => $v)
	{
		foreach ($arr_B as $k => $v)
		{
			if($arr_A[$v] > $arr_B[$v])
			{
				$temp = $arr_A[$v];
				$arr_A = $arr_B[$v];
				$arr_B[$v] = $arr_A[$v];
			}
		}
	}

	return $temp;
}

var_dump(Combine([1,3,6,9],[2,4,5,8,20])); //调用函数实现结果
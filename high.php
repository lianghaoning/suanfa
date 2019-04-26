<?php

header("content-type:text/html;charset=utf8");

function FindNumbersWithSum($array, $sum) //定义函数FindNumbersWithSum 传入两个值
{
	$a = []; //定义一个空数组

	$len = count($array); //计算数组的长度

	if($len < 2) //要求：如果有多对数字的和等于S，输出两个数的乘积最小的
	{
		echo "您输入的格式有误<br>";
		return false; //判断如果数组的长度小于2的时候 输出提示信息
	}

	for ($i=0; $i < $len; $i++) //第一次循环 匹配出第一个值
	{ 
		for ($j=0; $j < $len; $j++) //内循环 是匹配出所有值
		{ 
			if($array[$i] + $array[$j] == $sum) //判断满足条件的两个数
			{
				$a[] = $array[$i] * $array[$j]; //将两个数乘积求出
			}
		}
	}

	return $a[0]; //返回其值
}

var_dump(FindNumbersWithSum([2,3,4,5,6,7,8,9], 11));
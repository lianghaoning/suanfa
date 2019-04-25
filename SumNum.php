<?php

function Add($num1, $num2)
{
	if($num2 == 0)
	{
		return $num1;
	}

	$sum = $num1^$num2; //将把$num1和$num2中一个为1另一个为0的位设为1

	$sum += ($num1&$num2) << 1; //将把$num1和$num2中都为1的位设为1 将其相加

	return $sum;
}

var_dump(Add(2,23));
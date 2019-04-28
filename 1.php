<?php

function Find($array,$target)
{
	$row = count($array); //计算数组的行值
	$col = count($array[0])-1; //计算数组的列值
	
	if($row == 0 || $col == 0) return false; //判断不满足条件的值false

	if($target < $row || $target > $col) return false;  //判断不满足条件的值false

	$i = 0; //定义变量$i为0
	$j = $col-1; //定义变量让列值-1

	while ($target < $i || $j >0) //循环实现结果
	{
		if($target > $array[$i][$j])
		{
			$j--; //自身减1
		}

		elseif ($target < $array[$i][$j])
		{
			$i++; //自身+1
		}

		else
		{
			return true;
		}
	}

	return false;
}

var_dump(Find([[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]],7)); //调用此方法实现输出

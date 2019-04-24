<?php

function Sum_Solution($n) //将数传进来 依次计算
{
	$sum = $n; //赋值

	$sum && ($sum += Sum_Solution($n-1)); //&&表示左右两边的条件都必须满足

	return $sum; //将计算完成的值返回去 得到总和
}

var_dump(Sum_Solution(10)); //调用方法 实现求和
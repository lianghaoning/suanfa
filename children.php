<?php

//$n代表人数 $m代表编号 编号从0开始 小朋友的编号是从0到n-1

function LastRemaining_Solution($n, $m) //给其传入两个参数
{
	if($n == 0) //判断没有人的时候 编号是-1
	{
		return -1;
	}

	if($n == 1) //判断只有1个人的时候 则没有胜利者
	{
		return 0;
	}

	return (LastRemaining_Solution($n-1,$m)+$m)%$n; //使用此公式算出结果
}

$p = LastRemaining_Solution(2, 3); //调用此方法 实现返回小朋友的编号

echo "$p";
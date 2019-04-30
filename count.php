<?php

function NumberOf1($n)
{
	$num = decbin($n); //将十进制转换为二进制

	$count = substr_count($num, '1'); //统计1在字符串中的出现的次数

	return $count; //将结果返回
}

var_dump(NumberOf1(100)); //调用函数并输出返回1的结果
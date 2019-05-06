<?php

class Walk
{
	public static function CountSteps($x,$y)
	{
		//因此不管是到达那个点，它的必经之路一定是它上方或者左方相邻的那个点
		//递归表达式：f(m,n)=f(m-1,n)+f(m,n-1)

		if($x == 0 || $y == 0) 
		{
			return 1;
		}

		return self::CountSteps($x-1,$y)+self::CountSteps($x,$y-1);
	}
}

var_dump(Walk::CountSteps(3,3));

<?php

/* 
 * 定义一个类
 * 定义一个函数方法
 * 返回值
 * 调用函数方法
 */
class Ugly{
    
    public static function GetUglyNumber_Solution($index){
        
        if($index == 1){
            return 1;
        }
        //个数
        $geshu = 1;
        //输入的数字
        $shuzhi = 1;
        //循环判断
        while(true){
       
            if(self::checkUgly($shuzhi)){
           
            
                if($geshu == $index){
                    return $shuzhi;
                }
                $geshu++;
            }
            $shuzhi++;
        }
      
    }
    public static function checkUgly($num){
        while($num%2 == 0){
            $num = $num/2;
        }
        while($num%3 == 0){
            $num = $num/3;
        }
        while($num%5 == 0){
            $num = $num/5;
        }
        if($num == 1){
            return true;
        }else{
            return false;
        }
    }


}

$res = Ugly::GetUglyNumber_Solution(5);
echo $res;
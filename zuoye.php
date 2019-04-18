<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ugly {
  
    public static function GetUglyNumber_Solution($index) {
       
        if (is_int($index)) {
            if (is_int($index / 2)) {
                self::GetUglyNumber_Solution($index / 2);
                die;
            }
            if (is_int($index / 3)) {
                self::GetUglyNumber_Solution($index / 3);
                die;
            }
            if (is_int($index / 5)) {
                self::GetUglyNumber_Solution($index / 5);
                die;
            }
            if ($index == 1) {
              echo '是';
                
            } else {
               echo '不是';
            }
           
        }    
    }

}

$res = Ugly::GetUglyNumber_Solution(11);
echo $res;


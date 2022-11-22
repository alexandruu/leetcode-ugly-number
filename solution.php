<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isUgly($n) {
        if ($n < 0) {
            return false;
        }
        
        while ($n > 1) {
            $flag = 0;
            
            if ($n % 2 === 0) {
                $n = $n / 2;
                $flag = 1;
            }

            if ($n % 3 === 0) {
                $n = $n / 3;
                $flag = 1;
            }

            if ($n % 5 === 0) {
                $n = $n / 5;
                $flag = 1;
            }
            
            if ($flag === 0) {
                break;
            }
        }
        
        return $n === 1;
    }
}

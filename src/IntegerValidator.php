<?php
/**
 * Created by PhpStorm.
 * User: Carole
 * Date: 24/11/2014
 * Time: 08:50
 */

namespace Carole_A3_Rendu\TypeValidator;

class IntegerValidator
{
     public static function integerEqualTo($integer, $number)
    {
        if(is_int($integer) && is_int($number)){
            if($integer == $number){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public static function integerSuperiorTo($integer, $number)
    {
        if(is_int($integer) && is_int($number)){
            if($integer > $number){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public static function integerInferiorTo($integer, $number)
    {
        if(is_int($integer) && is_int($number)){
            if($integer < $number){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public static function integerInBetween($integer, $min, $max)
    {
        if(is_int($integer) && is_int($min) && is_int($max)){
            if($min<$integer && $integer<$max){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
            throw new \Exception ('The numbers are not integers');
        }
    }
}
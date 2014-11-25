<?php
/**
 * Created by PhpStorm.
 * User: Carole
 * Date: 24/11/2014
 * Time: 15:15
 */

namespace Carole_A3_Rendu\TypeValidator;


class StringValidator
{
    public static function stringEqualTo($string, $length)
    {
        if(is_string($string) === true && is_int($length) === true){
            if(mb_strlen($string) == $length){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public static function stringSuperiorTo($string, $length)
    {
        if(is_string($string) === true && is_int($length) === true){
            if(mb_strlen($string) > $length){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public static function stringInferiorTo($string, $length)
    {
        if(is_string($string) === true && is_int($length) === true){
            if(mb_strlen($string) < $length){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public static function stringBetween($string, $min, $max)
    {
        if(is_string($string) === true && is_int($min) === true && is_int($max) === true){
            if(mb_strlen($string) > $min && mb_strlen($string) < $max){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public static function stringStartAndEndWithNoSpace($string)
    {
        if(is_string($string) === true){
            if(substr($string, 0, 1) == " " || substr($string, mb_strlen($string)-1, 1) == " "){
                return false;
            }else{
                return true;
            }
        }else{
            return false;
        }
    }

    public static function stringWithNoWhiteSpace($string)
    {
        if(is_string($string) === true){
            if(strpos($string, ' ') === false){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}

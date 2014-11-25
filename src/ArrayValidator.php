<?php
/**
 * Created by PhpStorm.
 * User: Carole
 * Date: 25/11/2014
 * Time: 10:49
 */

namespace Carole_A3_Rendu\TypeValidator;


class ArrayValidator
{
    const EQUAL_SIGN             = 0;
    const SUPERIOR_SIGN          = 1;
    const SUPERIOR_OR_EQUAL_SIGN = 2;
    const INFERIOR_SIGN          = 3;
    const INFERIOR_OR_EQUAL_SIGN = 4;


    public static function arrayIsEmpty($array)
    {
        if(is_array($array) === true){
            if(empty($array)){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public static function compareValueInArray($array, $comparisonSign, $number)
    {
        if (is_array($array) === true && is_int($comparisonSign) === true && is_int($number) === true){
            switch($comparisonSign)
            {
                case self::EQUAL_SIGN:
                    return count($array) == $number;
                    break;
                case self::SUPERIOR_SIGN:
                    return count($array) > $number;
                    break;
                case self::SUPERIOR_OR_EQUAL_SIGN:
                    return count($array) >= $number;
                    break;
                case self::INFERIOR_SIGN:
                    return count($array) < $number;
                    break;
                case self::INFERIOR_OR_EQUAL_SIGN:
                    return count($array) <= $number;
                    break;
                default:
                    return false;
            }
        }else{
            return false;
        }
    }

    public static function numberElementsBetween($array, $min, $max)
    {
        if(is_array($array) === true && is_int($min) === true && is_int($max) === true){
            if ((count($array) >= $min) && (count($array) <= $max)){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public static function keyExists($array, $key)
    {
        if(is_array($array) === true){
            if(array_key_exists($key, $array)){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public static function valueExists($array, $value)
    {
        if(is_array($array) === true){
            if(in_array($value, $array)){
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }
    }
} 
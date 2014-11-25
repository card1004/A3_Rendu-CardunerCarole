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

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     */
    public static function stringEqualTo($string, $length)
    {
        if((string)$string && (int)$length){
            if(mb_strlen($string) == $length){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     */
    public static function stringSuperiorTo($string, $length)
    {
        if((string)$string && (int)$length){
            if(mb_strlen($string) > $length){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     */
    public static function stringInferiorTo($string, $length)
    {
        if((string)$string && (int)$length){
            if(mb_strlen($string) < $length){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    /**
     * @param string $string
     * @param int $min
     * @param int $max
     *
     * @return bool
     */
    public static function stringBetween($string, $min, $max)
    {
        if((string)$string && (int)$min && (int)$max){
            if(mb_strlen($string) > $min && mb_strlen($string) < $max){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    /**
     * @param string $string
     *
     * @return bool
     */
    public static function stringStartAndEndWithSpace($string)
    {
        if((string)$string){
            if(substr($string, 0, 1) == " " || substr($string, mb_strlen($string)-1, 1) == " "){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    /**
     * @param string $string
     *
     * @return bool
     */
    public static function stringWithNoWhiteSpace($string)
    {
        if((string)$string){
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

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
    /**
     * @param int $integer
     * @param int $number
     * @return bool
     * @throws \Exception
     */
    public static function integerEqualValidator($integer, $number)
    {
        if(is_int($integer) && is_int($number)){
            if($integer === $number){
                return true;
            }else{
                return false;
                throw new \Exception ('The numbers are not equals');
            }
        }else{
            return false;
            throw new \Exception ('The numbers are not integers');
        }

    }

    /**
     * @param int $integer
     * @param int $min
     * @param int $max
     * @return bool
     * @throws \Exception
     */
    public static function integerInBetweenValidator($integer, $min, $max)
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
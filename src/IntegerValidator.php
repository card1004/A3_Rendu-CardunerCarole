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
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function integerEqualTo($integer, $number)
    {
        if((int)$integer && (int)$number){
            if($integer == $number){
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
     * @param int $number
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function integerSuperiorTo($integer, $number)
    {
        if((int)$integer && (int)$number){
            if($integer > $number){
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
     * @param int $number
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function integerInferiorTo($integer, $number)
    {
        if((int)$integer && (int)$number){
            if($integer < $number){
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
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function integerInBetween($integer, $min, $max)
    {
        if((int)$integer && (int)$min && (int)$max){
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

/**
 *
Supérieur
Inférieur
Négatif (avec possiblité d'inclure 0)
Positif (avec possiblité d'inclure 0)
 */
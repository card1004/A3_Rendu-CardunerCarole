<?php
/**
 * Created by PhpStorm.
 * User: Carole
 * Date: 24/11/2014
 * Time: 09:13
 */

namespace Carole_A3_Rendu\TypeValidator;


class BooleanValidator
{
    public static function booleanIsTrue($boolean)
    {
        if(is_bool($boolean) === true){
            return true;
        }else{
            return false;
        }
    }

    public static function booleanIsFalse($boolean)
    {
        if(is_bool($boolean) === false){
            return true;
        }else{
            return false;
        }
    }
}
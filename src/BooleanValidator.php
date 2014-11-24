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
    /**
     * @param booleal $boolean
     * @return bool
     * @throws \Exception
     */
    public static function booleanValidator($boolean)
    {
        if(is_bool($boolean) === true){
            return true;
        }else{
            return false;
            throw new \Exception ('The value is not a boolean');
        };
    }
}
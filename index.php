<?php
/**
 * Created by PhpStorm.
 * User: Carole
 * Date: 24/11/2014
 * Time: 08:51
 */

require __DIR__.'/vendor/autoload.php';

PDO::FETCH_OBJ;

$boolean = false;
echo Carole_A3_Rendu\TypeValidator\BooleanValidator::booleanValidator($boolean);

$number = 3;
$integer = 3;
echo Carole_A3_Rendu\TypeValidator\IntegerValidator::integerEqualTo($integer, $number);

$min = 1;
$max = 4;
echo Carole_A3_Rendu\TypeValidator\IntegerValidator::integerInBetween($integer,$min,$max);

$string ='Nospace';
echo Carole_A3_Rendu\TypeValidator\StringValidator::stringWithNoWhiteSpace($string);

$array = array();
echo Carole_A3_Rendu\TypeValidator\ArrayValidator::arrayIsEmpty($array);

var_dump(Carole_A3_Rendu\TypeValidator\ArrayValidator::arrayIsEmpty($array));
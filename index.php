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
<?php
/**
 * Created by PhpStorm.
 * User: Carole
 * Date: 24/11/2014
 * Time: 20:12
 */

namespace Tests\Carole_A3_Rendu\TypeValidator;
use Carole_A3_Rendu\TypeValidator;


/**
 * Class BooleanValidatorTest
 * @package Tests\Carole_A3_Rendu\TypeValidator
 */
class StringValidatorTest extends \PHPUnit_Framework_TestCase{

    public function testStringEqualTo()
    {
        $string = 'This is a string';
        $length = mb_strlen($string);
        $result = TypeValidator\StringValidator::stringEqualTo(mb_strlen($string), $length);

        $this->assertTrue($result);
    }

    public function testStringSuperiorTo()
    {
        $string = 'This is a string';
        $length = mb_strlen($string)-5;
        $result = TypeValidator\StringValidator::stringSuperiorTo(mb_strlen($string), $length);

        $this->assertTrue($result);
    }

    public function testStringInferiorTo()
    {
        $string = 'This is a string';
        $length = mb_strlen($string)+5;
        $result = TypeValidator\StringValidator::stringInferiorTo(mb_strlen($string), $length);

        $this->assertTrue($result);
    }

    public function testStringBetween()
    {
        $string = 'This is a string';
        $min = mb_strlen($string)-5;
        $max = mb_strlen($string)+5;
        $result = TypeValidator\StringValidator::stringBetween(mb_strlen($string), $min, $max);

        $this->assertTrue($result);
    }

    public function testStringStartAndEndWithSpace()
    {
        $string = 'This is a string ';
        $result = TypeValidator\StringValidator::stringStartAndEndWithSpace($string);

        $this->assertTrue($result);
    }


    public function testStringWithNoWhiteSpace()
    {
        $string = 'Thisisastringwithnospace';
        $result = TypeValidator\StringValidator::stringWithNoWhiteSpace($string);

        $this->assertTrue($result);
    }
}
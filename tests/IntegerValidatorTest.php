<?php
/**
 * Created by PhpStorm.
 * User: Carole
 * Date: 24/11/2014
 * Time: 14:39
 */

namespace Tests\Carole_A3_Rendu\TypeValidator;
use Carole_A3_Rendu\TypeValidator;


/**
 * Class IntegerValidatorTest
 * @package Tests\Carole_A3_Rendu\TypeValidator
 */
class IntegerValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if $integer is equal to $number
     *
     * @throws \Exception
     */
    public function testIntegerEqualTo()
    {
        $integer = mt_rand(18, 100);
        $number = $integer;
        $result = TypeValidator\IntegerValidator::integerEqualTo($integer, $number);
        $this->assertTrue($result);
    }

    /**
     * Test if $integer is superior to $number
     *
     * @throws \Exception
     */
    public function testIntegerSuperiorTo()
    {
        $integer = mt_rand(18, 100);
        $number = $integer-1;
        $result = TypeValidator\IntegerValidator::integerSuperiorTo($integer, $number);

        $this->assertTrue($result);
    }

    /**
     * Test if $integer is inferior to $number
     *
     * @throws \Exception
     */
    public function testIntegerInferiorTo()
    {
        $integer = mt_rand(18, 100);
        $number = $integer+1;
        $result = TypeValidator\IntegerValidator::integerInferiorTo($integer, $number);

        $this->assertTrue($result);
    }

    /**
     * Test if
     *
     * @throws \Exception
     */
    public function testIntegerInBetween()
    {
        $integer = mt_rand(18, 100);
        $min = $integer-5;
        $max = $integer+5;
        $result = TypeValidator\IntegerValidator::integerInBetween($integer, $min, $max);

        $this->assertTrue($result);
    }
}
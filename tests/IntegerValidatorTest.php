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
        $number = mt_rand(18, 100);
        $result = TypeValidator\IntegerValidator::integerEqualTo($number, $number);
        $this->assertTrue($result);
    }

    /**
     * Test if $integer is equal to $number
     *
     * @throws \Exception
     */
    public function testIntegerSuperiorTo()
    {
        $number = mt_rand(18, 100);
        $result = TypeValidator\IntegerValidator::integerSuperiorTo($number, $number-1);

        $this->assertTrue($result);
    }

    /**
     * Test if $integer is equal to $number
     *
     * @throws \Exception
     */
    public function testIntegerInferiorTo()
    {
        $number = mt_rand(18, 100);
        $result = TypeValidator\IntegerValidator::integerInferiorTo($number, $number+1);

        $this->assertTrue($result);
    }

    /**
     * Test if
     *
     * @throws \Exception
     */
    public function testIntegerInBetween()
    {
        $integer = mt_rand(33, 66);
        $min = mt_rand(0, 32);
        $max = mt_rand(67, 100);
        $result = TypeValidator\IntegerValidator::integerInBetween($integer, $min, $max);

        $this->assertTrue($result);
    }
}
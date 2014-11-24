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
     * Test if
     *
     * @throws \Exception
     */
    public function testIntegerEqualValidator()
    {
        $integer  = 4;
        $number   = 4;
        $function = TypeValidator\IntegerValidator::integerEqualValidator($integer,$number);
        $this->assertTrue($function);
    }

    /**
     * Test if
     *
     * @throws \Exception
     */
    public function testIntegerInBetweenValidator()
    {
        $integer  = 3;
        $min      = 2;
        $max      = 4;
        $function = TypeValidator\IntegerValidator::integerInBetweenValidator($integer, $min, $max);
        $this->assertTrue($function);
    }
}
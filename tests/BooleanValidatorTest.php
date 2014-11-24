<?php
/**
 * Created by PhpStorm.
 * User: Carole
 * Date: 24/11/2014
 * Time: 11:07
 */

namespace Tests\Carole_A3_Rendu\TypeValidator;
use Carole_A3_Rendu\TypeValidator;


/**
 * Class BooleanValidatorTest
 * @package Tests\Carole_A3_Rendu\TypeValidator
 */
class BooleanValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the function booleanValidator return a data type boolean
     *
     * @throws \Exception
     */
    public function testBooleanValidator()
    {
        $boolean = true;
        $function = TypeValidator\BooleanValidator::booleanValidator($boolean);
        $this->assertTrue($function);
    }
}
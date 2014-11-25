<?php
/**
 * Created by PhpStorm.
 * User: Carole
 * Date: 25/11/2014
 * Time: 10:49
 */

namespace Tests\Carole_A3_Rendu\TypeValidator;
use Carole_A3_Rendu\TypeValidator;


/**
 * Class ArrayValidatorTest
 * @package Tests\Carole_A3_Rendu\TypeValidator
 */
class ArrayValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if an array is empty
     *
     * @throws \Exception
     */
    public function testArrayIsEmpty()
    {
        $array = [];
        $result = TypeValidator\ArrayValidator::arrayIsEmpty($array);

        $this->assertTrue($result);
    }

    /**
     * Test if the number of element in an array is equal to the $integer parameter
     *
     * @throws \Exception
     */
    public function testCompareValueInArrayEqual()
    {
        $array = ['first'];
        $comparisonSign = TypeValidator\ArrayValidator::EQUAL_SIGN;
        $integer = 1;
        $result = TypeValidator\ArrayValidator::compareValueInArray($array, $comparisonSign, $integer);

        $this->assertTrue($result);
    }

    /**
     * Test if the number of element in an array is higher than the $integer parameter
     *
     * @throws \Exception
     */
    public function testCompareValueInArraySuperior()
    {
        $array = ['first', 'second'];
        $comparisonSign = TypeValidator\ArrayValidator::SUPERIOR_SIGN;
        $integer = 1;

        $result =  TypeValidator\ArrayValidator::compareValueInArray($array, $comparisonSign, $integer);

        $this->assertTrue($result);
    }

    /**
     * Test if the number of element in an array is higher or equal to the $integer parameter
     *
     * @throws \Exception
     */
    public function testCompareValueInArraySuperiorOrEqual()
    {
        $array = ['first'];
        $comparisonSign = TypeValidator\ArrayValidator::SUPERIOR_OR_EQUAL_SIGN;
        $integer = 1;

        $result =  TypeValidator\ArrayValidator::compareValueInArray($array, $comparisonSign, $integer);

        $this->assertTrue($result);
    }

    /**
     * Test if the number of element in an array is lower than the $integer parameter
     *
     * @throws \Exception
     */
    public function testCompareValueInArrayInferior()
    {
        $array = ['first'];
        $comparisonSign = TypeValidator\ArrayValidator::INFERIOR_SIGN;
        $integer = 2;

        $result =  TypeValidator\ArrayValidator::compareValueInArray($array, $comparisonSign, $integer);

        $this->assertTrue($result);
    }

    /**
     * Test if the number of element in an array is lower or equal to the $integer parameter
     *
     * @throws \Exception
     */
    public function testCompareValueInArrayInferiorOrEqual()
    {
        $array = ['first'];
        $comparisonSign = TypeValidator\ArrayValidator::INFERIOR_OR_EQUAL_SIGN;
        $integer = 1;

        $result = TypeValidator\ArrayValidator::compareValueInArray($array, $comparisonSign, $integer);

        $this->assertTrue($result);
    }

    /**
     * Test Default situation with compare function
     *
     * @throws \Exception
     */
    public function testCompareValueInArrayDefault()
    {
        $array = ['first'];
        $comparisonSign = 8;
        $integer = 1;

        $result = TypeValidator\ArrayValidator::compareValueInArray($array, $comparisonSign, $integer);

        $this->assertFalse($result);
    }

    /**
     * Test if number of element is located inside a range of number
     *
     * @throws \Exception
     */
    public function testNumberElementsBetween()
    {
        $array = ['one', 'two', 'three', 'four', 'five'];
        $min = mt_rand(1,4);
        $max = mt_rand(6,10);

        $result = TypeValidator\ArrayValidator::numberElementsBetween($array,$min, $max);

        $this->assertTrue($result);
    }

    /**
     * Test if the key parameter exist within the array
     *
     * @throws \Exception
     */
    public function testKeyExists()
    {
        $array = [
            'name'      => 'Carole',
            'lastname'  => 'Carduner',
            'groupe'    => 'WEB1',
            'object'    => 'Rendu PHP',
        ];
        $key = 'name';

        $result = TypeValidator\ArrayValidator::keyExists($array, $key);

        $this->assertTrue($result);
    }

    /**
     * Test if the value parameter exist within the array
     *
     * @throws \Exception
     */
    public function testArrayValidatorValueExists()
    {
        $array = [
            'name'      => 'Carole',
            'lastname'  => 'Carduner',
            'groupe'    => 'WEB1',
            'object'    => 'Rendu PHP',
        ];
        $value = '4';

        $result = TypeValidator\ArrayValidator::valueExists($array, $value);

        $this->assertTrue($result);
    }
}
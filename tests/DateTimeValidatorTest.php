<?php
/**
 * Created by PhpStorm.
 * User: Carole
 * Date: 25/11/2014
 * Time: 12:58
 */

namespace Tests\Carole_A3_Rendu\TypeValidator;
use Carole_A3_Rendu\TypeValidator;

/**
 * Class DateTimeValidatorTest
 * @package Tests\Carole_A3_Rendu\TypeValidator
 */
class DateTimeValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the date's day in first parameter match to the day in second parameter
     */
    public function testCheckDay()
    {
        $date = new \DateTime();
        $day = $date->format('d');
        $result = TypeValidator\DateTimeValidator::checkDay($date->format('d'), $day);

        $this->assertTrue($result);
    }

    /**
     * Test if the date's month in first parameter match to the month in second parameter
     */
    public function testCheckMonth()
    {
        $date = new \DateTime();
        $month = $date->format('m');
        $result = TypeValidator\DateTimeValidator::checkMonth($date->format('m'), $month);

        $this->assertTrue($result);
    }

    /**
     * Test if the date's year in first parameter match to the year in second parameter
     */
    public function testCheckYear()
    {
        $date = new \DateTime();
        $year = $date->format('Y');
        $result = TypeValidator\DateTimeValidator::checkYear($date->format('Y'), $year);

        $this->assertTrue($result);
    }

    /**
     * Test if the date in parameter is today's date
     */
    public function testCheckToday()
    {
        $date = new \DateTime();
        $today = $date->format('Y-m-d');
        $result = TypeValidator\DateTimeValidator::checkToday($date->format('Y-m-d'), $today);

        $this->assertTrue($result);
    }
}
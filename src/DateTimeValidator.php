<?php
/**
 * Created by PhpStorm.
 * User: Carole
 * Date: 25/11/2014
 * Time: 12:30
 */

namespace Carole_A3_Rendu\TypeValidator;


class DateTimeValidator
{

    public static function checkDay($day)
    {
        $dateDay = new \DateTime();
        if($dateDay->format('d') == $day){
            return true;
        }else{
            return false;
        }
    }

    public static function checkMonth($month)
    {
        $dateMonth = new \DateTime();
        if($dateMonth->format('m') === $month){
            return true;
        }else{
            return false;
        }
    }

    public static function checkYear($year)
    {
        $dateYear = new \DateTime();
        if($dateYear->format('Y') === $year){
            return true;
        }else{
            return false;
        }
    }

    public static function checkToday($today)
    {
        $dateToday = new \DateTime();
        if ($dateToday->format('Y-m-d') === $today){
            return true;
        }else {
            return false;
        }
    }
}
<?php


namespace App\Helpers;


class DateHelper
{
    public function formatDateToDB($date){
        $myDateTime = \DateTime::createFromFormat('d/m/Y', $date);
        return $myDateTime->format('Y-m-d');
    }

    public function formatDateFromDB($date){
        $myDateTime = \DateTime::createFromFormat('Y-m-d', $date);
        return $myDateTime->format('d/m/Y');
    }

    public function checkValidateDate($date, $format = "d/m/Y"){
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
}
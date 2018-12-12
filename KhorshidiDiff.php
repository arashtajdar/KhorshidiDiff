<?php
/**
 * Created by PhpStorm.
 * User: atajdar
 * Date: 12/12/2018
 * Time: 3:57 PM
 */

class KhorshidiDiff
{

//    public $date1 = 0;
//    public $date2 = 0;
    public function __construct(){
//        echo 'The class "' . __CLASS__ . '" was initiated!<br>';
    }

    // Destructor
    public function __destruct(){
//        echo 'The class "' . __CLASS__ . '" was destroyed.<br>';
    }

    public function dateDiff($date1,$date2,$delimiter){
//        $date1 = $this->date1;
//        $date2 = $this->date2;

        if($date2>$date1){
            $start_date_array = explode($delimiter,$date1);
            $end_date_array = explode($delimiter,$date2);
        }else{
            $start_date_array = explode($delimiter,$date2);
            $end_date_array = explode($delimiter,$date1);
        }
        $y1 = $start_date_array[0];
        $m1 = $start_date_array[1];
        $d1 = $start_date_array[2];

        $y2 = $end_date_array[0];
        $m2 = $end_date_array[1];
        $d2 = $end_date_array[2];

        $diff = 0;
        if( $y1 == $y2){ //if the dates are in the same year
            $diff = $this->dayNumber($d2,$m2)-$this->dayNumber($d1,$m1);
        }else{
            // needs development if the dates are not in the same year
            $diff += ($y2-$y1-1)*365;
            $diff += 365-$this->dayNumber($d1,$m1);
            $diff += $this->dayNumber($d2,$m2);
        }
        return $diff;
    }
    public function dayNumber($d,$m){
        $n = 0;
        if($m >6){
            $n += 6*31;
            $n += ($m-6-1)*30;
        }else{
            $n += ($m-1)*31;
        }
        $n += $d;
        return $n;
    }
}
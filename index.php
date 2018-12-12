<?php
/**
 * Created by PhpStorm.
 * User: atajdar
 * Date: 12/12/2018
 * Time: 4:10 PM
 */
require "KhorshidiDiff.php";
$obj = new KhorshidiDiff;
//$obj->date1 = "1397/01/01";
//$obj->date2 = "1397/01/03";
$diff = $obj->dateDiff("1397/01/01","1397/01/03","/");
//$diff = $obj->dateDiff();
echo $diff;

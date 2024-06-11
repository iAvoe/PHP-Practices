<?php
// Do math here, include math_functions.php
// WARNING: NAN != NAN, use is_nan()
include 'math_functions.php';

/**
 * @author - <-@mohawkcollege.ca>
 * @package 10260 starter code
 * @version 202401
 */

$outList = "<br>";
$outList .= add(10, 5) . "<br>";
$outList .= minus(5, 10) . "<br>";
$outList .= times(7, 3) . "<br>";
//$n = divide(20, 4);
//($n == NAN) ? $outList .= "Division by 0" . "<br>" : $outList .= $n . "<br>";
//$n = divide(15, 0);
//($n == NAN) ? $outList .= "Division by 0" . "<br>" : $outList .= $n . "<br>";
$outList .= is_nan(divide(20, 4)) ? "Division by 0" : divide(20, 4) . "<br>";
$outList .= is_nan(divide(15, 0)) ? "Division by 0" : divide(15, 0) . "<br>";
echo $outList;

// <br>15<br>-5<br>21<br>5<br>Division by 0<br>
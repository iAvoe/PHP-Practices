<?php
// <button onclick="runPHP('leap_year.php', '#p5-sol',document.getElementById('q5-i1').value, null )" type="button" class="p-2 btn btn-sm btn-outline-secondary">Run PHP</button>
// fetch( fn+"?inputvar1="+in1+"&inputvar2="+in2 )

/**
 * @author - <-@mohawkcollege.ca>
 * @package 10260 starter code
 * @version 202401
 */

$input1 = isset($_GET['inputvar1']) ? $_GET['inputvar1'] : null;

if (!filter_var($input1, FILTER_VALIDATE_INT)) {
    echo "Input number is not an integer";
}
else { echo (($input1%4===0) || ($input1%100 && $input1%400)===0) ? "Year $input1 is a leap year" : "Year $input1 isn't a leap year"; }
<?php
// <button onclick="runPHP('temperature_conversion.php', '#p1-sol',document.getElementById('q1-i1').value, document.getElementById('q1-i2').checked )" type="button" class="p-2 btn btn-sm btn-outline-secondary">Run PHP</button>
// fetch( fn+"?inputvar1="+in1+"&inputvar2="+in2 )

/**
 * @author - <-@mohawkcollege.ca>
 * @package 10260 starter code
 * @version 202401
 */

/**
 * @param float $temp The temperature in farenheit degrees
 * @return float The converted temperature in celsius
 */
function f_to_c($temp) { return 5/9*($temp-32); }

/**
 * @param float $temp The temperature in celsius degrees
 * @return float The converted temperature in farenheit
 */
function c_to_f($temp) { return ($temp*9/5)+32; }

// Generic input with filtering
$input1 = isset($_GET['inputvar1']) ? $_GET['inputvar1'] : null;
$input2 = isset($_GET['inputvar2']) ? $_GET['inputvar2'] : null;

if (!filter_var($input1, FILTER_VALIDATE_FLOAT, FILTER_VALIDATE_INT)) {
    echo "Temperature is not a number";
} 
else if (!filter_var($input2, FILTER_VALIDATE_BOOLEAN)) {
    echo "Checkbox F to C is broken";
} 
else {
    if ($input2) { echo f_to_c($input1).' °C'; } // F to C
    else { echo c_to_f($input1).' °F'; } // C to F
}

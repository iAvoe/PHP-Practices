<?php
// <button onclick="runPHP('factorial.php', '#p7-sol',document.getElementById('q7-i1').value, null )" type="button" class="p-2 btn btn-sm btn-outline-secondary">Run PHP</button>
// fetch( fn+"?inputvar1="+in1+"&inputvar2="+in2 )

/**
 * @author - <-@mohawkcollege.ca>
 * @package 10260 starter code
 * @version 202401
 */

// This line allows us to change the else condition to whatever we want to debug during debugging
$input1 = isset($_GET['inputvar1']) ? $_GET['inputvar1'] : null;

if (!filter_var($input1, FILTER_VALIDATE_INT)) { // filter_var() Returns 0/false when $input1 is bad
    echo "Input is not an integer";
}
else if ($input1 < 0) {
    echo "Input is not positive";
}
else if ($input===1) {
    echo "Factorial of 1 is 1";
}
else {
    $f = 1;
    for ($i=1; $i<=$input1; $i++) { // Note: must be <=, $i need to be as $input1 for the last multiply
        $f *= $i;
    }
    echo "Factorial of $input1 is $f";
}
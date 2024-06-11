<?php
// <button onclick="runPHP('ticket_price.php', '#p4-sol',document.getElementById('q4-i1').value, null )" type="button" class="p-2 btn btn-sm btn-outline-secondary">Run PHP</button>
// fetch( fn+"?inputvar1="+in1+"&inputvar2="+in2 )

/**
 * @author - <-@mohawkcollege.ca>
 * @package 10260 starter code
 * @version 202401
 */

$input1 = isset($_GET['inputvar1']) ? $_GET['inputvar1'] : null;
// echo gettype($input1); // string
// echo filter_var($input1, FILTER_VALIDATE_INT, FILTER_VALIDATE_FLOAT); // not echoing false

if (!filter_var($input1, FILTER_VALIDATE_INT, FILTER_VALIDATE_FLOAT)) {
    echo "Input is not a number";
}
else {
    if ($input1 <= 5) { echo "$0.00"; }
    else if ($input1 <= 17) { echo "$8.00"; }
    else if ($input1 <= 64) { echo "$12.00"; }
    else { echo "$10.00"; }
}
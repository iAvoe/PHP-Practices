<?php
// <button onclick="runPHP('dow.php', '#p6-sol',document.getElementById('q6-i1').value, null )" type="button" class="p-2 btn btn-sm btn-outline-secondary">Run PHP</button>
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
// else if ($input1 < 1 || $input1 > 7) {
//     echo "Input is not within 1-7"
// }
else {
    switch ($input1) {
        default: echo "Input is not within 1-7"; break;
        case 1: echo "Monday"; break;
        case 2: echo "Tuesday"; break;
        case 3: echo "Wednesday"; break;
        case 4: echo "Thursday"; break;
        case 5: echo "Friday"; break;
        case 6: echo "Saturday"; break;
        case 7: echo "Sunday"; break;
    }
}
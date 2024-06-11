<?php
// <button onclick="runPHP('even_list.php', '#p9-sol',document.getElementById('q9-i1').value, document.getElementById('q9-i2').value )" type="button" class="p-2 btn btn-sm btn-outline-secondary">Run PHP</button>
// fetch( fn+"?inputvar1="+in1+"&inputvar2="+in2 )

/**
 * @author - <-@mohawkcollege.ca>
 * @package 10260 starter code
 * @version 202401
 */

// This line allows us to change the else condition to whatever we want to debug during debugging
$input1 = isset($_GET['inputvar1']) ? $_GET['inputvar1'] : null; // From
$input2 = isset($_GET['inputvar2']) ? $_GET['inputvar2'] : null; // To

if (!filter_var($input1, FILTER_VALIDATE_INT)) { // filter_var() Returns 0/false when $input1 is bad
    echo "Low is not an integer";
}
else if (!filter_var($input1, FILTER_VALIDATE_INT)) { // filter_var() Returns 0/false when $input1 is bad
    echo "High is not an integer";
}
else if ($input1 >= $input2) {
    echo "Low is equal or higher than High";
}
else {
    if ($input1%2 !== 0) { $input1++; }
    if ($input2%2 !== 0) { $input2--; }
    $outList = "";
    for ($i=$input1; $i<=$input2; $i+=2) {
        $outList .= "$i, ";
    }
    echo substr($outList, 0, -2);
}
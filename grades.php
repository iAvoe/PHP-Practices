<?php
// fetch( fn+"?inputvar1="+in1+"&inputvar2="+in2 )
// 90 and above: A
// 80 to 89: B
// 70 to 79: C
// 60 to 69: D
// Below 60: F
// <button onclick="runPHP('grades.php', '#p2-sol',document.getElementById('q2-i1').value, null )" type="button" class="p-2 btn btn-sm btn-outline-secondary">Run PHP</button>

/**
 * @author - <-@mohawkcollege.ca>
 * @package 10260 starter code
 * @version 202401
 */

$input1 = isset($_GET['inputvar1']) ? $_GET['inputvar1'] : null;

if (!filter_var($input1, FILTER_VALIDATE_FLOAT, FILTER_VALIDATE_INT)) {
    echo "Grade is not a number";
}
else {
    if ($input1 >= 90) { echo "You grade is A."; }
    else if ($input1 >= 80) { echo "You grade is B."; }
    else if ($input1 >= 70) { echo "You grade is C."; }
    else if ($input1 >= 60) { echo "You grade is D."; }
    else if ($input1 >= 50) { echo "You grade is E."; }
    else { echo "You grade is F."; }
}
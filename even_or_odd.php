<?php
// <button onclick="runPHP('even_or_odd.php', '#p3-sol',document.getElementById('q3-i1').value, null )" type="button" class="p-2 btn btn-sm btn-outline-secondary">Run PHP</button>
// fetch( fn+"?inputvar1="+in1+"&inputvar2="+in2 )

/**
 * @author - <-@mohawkcollege.ca>
 * @package 10260 starter code
 * @version 202401
 */

$input1 = isset($_GET['inputvar1']) ? $_GET['inputvar1'] : null;

if (!filter_var($input1, FILTER_VALIDATE_INT)) {
    echo "Variable is not an integer";
}
else {
    echo ($input1%2 == 0) ? "Input is even" : "Input is odd" ;
}
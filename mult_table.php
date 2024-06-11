<?php
// <button onclick="runPHP('mult_table.php', '#p8-sol',document.getElementById('q8-i1').value, document.getElementById('q8-i2').value )" type="button" class="p-2 btn btn-sm btn-outline-secondary">Run PHP</button>
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
    $tbl = "<table class=\"table\">";
    // Creating the table head (top part)
    $tbl .= "<thead><tr><th>M</th>";
    for ($i=$input1; $i<=$input2; $i++) {
        $tbl .= "<th>$i</th>";
    }
    $tbl .= "</tr></thead>";

    $tbl .= "<tbody>";
    for ($i=$input1; $i<=$input2; $i++) { // Start from row 1
        $tbl .= "<tr>";
        $tbl .= "<th>$i</th>";
        for ($j=$input1; $j<=$input2; $j++) { // Start from column 0
            // The first column elements are also table headings, otherwise write as td
            $tbl .= "<td>".$i*$j."</td>";
            // $tbl .= ($i===$input1 || $j===$input1) ? "<th>".$i*$j."</th>" : "<td>".$i*$j."</td>";
        }
        $tbl .= "</tr>";
    }
    $tbl .= "</tbody></table>";
    echo $tbl;
}
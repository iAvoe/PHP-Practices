<?php
// <button onclick="runPHP('password_generate.php', '#p12-sol',null, null )" type="button" class="p-2 btn btn-sm btn-outline-secondary">Run PHP</button>
// No fetch, just simulate 5 dice rolls
// $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

/**
 * @author - <-@mohawkcollege.ca>
 * @package 10260 starter code
 * @version 202401
 */

$outList = "";
for ($i=0; $i<5; $i++) {
    for ($j=0; $j<16; $j++) {
        do { $n = rand(33, 122); }
        while(in_array($n, array(44, 47, 60, 61, 62, 92, 96))); // Avoid comma, forward slash, less than, equal, greater than, backward slash & escape
        $outList .= chr($n);
    }
    $outList .= ", ";
}
echo substr($outList, 0, -2);
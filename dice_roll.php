<?php
// <button onclick="runPHP('dice_roll.php', '#p10-sol',null, null )" type="button" class="p-2 btn btn-sm btn-outline-secondary">Run PHP</button>
// No fetch, just simulate 5 dice rolls

/**
 * @author - <-@mohawkcollege.ca>
 * @package 10260 starter code
 * @version 202401
 */

$outList = "";
for ($i=0; $i<5; $i++) {$outList .= rand(1, 6).", "; }
echo substr($outList, 0, -2); // Remove the last ", " part
<?php
// <button onclick="runPHP('day_or_night.php', '#p13-sol',null, null )" type="button" class="p-2 btn btn-sm btn-outline-secondary">Run PHP</button>
// No fetch

/**
 * @author - <-@mohawkcollege.ca>
 * @package 10260 starter code
 * @version 202401
 */

date_default_timezone_set('US/Eastern'); // Change when deploy in another region, I guess

$dt = date('H:m:s');
if (date('H') > 12) {
    echo "<h1 class=\"backgrond-light text-warning\">$dt</h1>";
}
else {
    echo "<h1 class=\"backgrond-dark text-dark\">$dt</h1>";
}
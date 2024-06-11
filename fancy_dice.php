<?php
// <button onclick="runPHP('fancy_dice.php', '#p11-sol',null, null )" type="button" class="p-2 btn btn-sm btn-outline-secondary">Run PHP</button>
// No fetch, just simulate 5 dice rolls

/**
 * @author - <-@mohawkcollege.ca>
 * @package 10260 starter code
 * @version 202401
 */

$outList = "";
for ($i=0; $i<5; $i++) {
    switch (rand(1, 6)) {
        case 1: $outList .= "<div class=\"bg-danger text-white\">1</div>"; break;
        case 2: $outList .= "<div class=\"text-warning\">2</div>"; break;
        case 3: $outList .= "<div class=\"text-secondary\">3</div>"; break;
        case 4: $outList .= "<div class=\"text-primary\">4</div>"; break;
        case 5: $outList .= "<div class=\"text-info\">5</div>"; break;
        case 6: $outList .= "<div class=\"text-success\">6</div>"; break;
    }
}
echo $outList;
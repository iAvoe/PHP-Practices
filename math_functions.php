<?php
// put addition, subtraction, ... here

/**
 * @author - <-@mohawkcollege.ca>
 * @package 10260 starter code
 * @version 202401
 */

/**
 * Add 2 numbers
 * @param float $i first number
 * @param float $j second number
 * returns the result of number 1 adds number 2
 */
function add($i, $j) { return $i+$j; }
/**
 * Minus 2 numbers
 * @param float $i first number
 * @param float $j operator number
 * returns the result of number 1 minus number 2
 */
function minus($i, $j) { return $i-$j; }
/**
 * Times 2 numbers
 * @param float $i first number
 * @param float $j second number
 * returns the result of number 1 times number 2
 */
function times($i, $j) { return $i*$j; }
/**
 * Divide 2 numbers
 * @param float $i first number
 * @param float $j operator number
 * returns the result of number 1 divides number 2
 */
function divide($i, $j) {
    if ($i===0) { return 0; }
    if ($j===0) { return NAN; }
    return $i/$j;
}
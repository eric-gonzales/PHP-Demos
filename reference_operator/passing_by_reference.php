<?php
/**
 * @author Eric Gonzales
 */

/**
 * @param $var The variable that we are incrementing by one.
 */
function increment_by_one(&$var)
{
    $var++;
}

$a=8; //first we will declare a number
increment_by_one($a); //now we will call the increment_by_one function defined above.
echo $a; //this will echo "9". The increment_by_one function
?>

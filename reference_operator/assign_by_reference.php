<?php
/**
 * @author Eric Gonzales
 */
//Pak Chee is the name of my cat. I'll use her in this example.
$pak_chee =& $cat; //use the reference operator to "bind" $pak_chee and $cat.
$cat = 4; //set a value for $cat
echo $pak_chee; //is also the same value for $pak_chee
echo '<br>';

//It works the other way too. Watch this:
$pak_chee = 8; //assign a value to $pak_chee
echo $cat; //check the value for $cat
//The same variable content can be accessed by different names!
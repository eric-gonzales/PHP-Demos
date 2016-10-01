<?php
class foo {
    public $value = 8;

    public function &getValue() {
        return $this->value;
    }
}

$obj = new foo;
$myValue = &$obj->getValue(); // $myValue is now a reference to $obj->value
echo $myValue;
echo '<br>';
$obj->value = 3;
echo $myValue;                // prints the new value of $obj->value, i.e. 3.
?>

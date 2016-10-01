<?php
class A {
    public $foo = 1;
}

$a = new A;
$b = $a;     //$a and $b are copies of the same identifier. Not a reference, but object accessors can find the actual object
// ($a) = ($b) = <id>
$b->foo = 2;
echo $a->foo."<br>";


$c = new A;
$d = &$c;    //$c and $d are references. PHP References are "aliases"
// ($c,$d) = <id>

$d->foo = 4;
echo $c->foo."<br>";


$e = new A;

function foo($obj) {
    // ($obj) = ($e) = <id>
    $obj->foo = 8;
}

foo($e);
echo $e->foo."<br>";

?>

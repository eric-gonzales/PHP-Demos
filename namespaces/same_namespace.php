<?php
namespace App\Lib2;

require_once('lib1.php');
require_once('lib2.php');

header('Content-type: text/plain');
echo MYCONST . "\n";
echo MyFunction() . "\n";
echo MyClass::WhoAmI() . "\n";
?>
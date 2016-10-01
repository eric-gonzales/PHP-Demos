<?php
spl_autoload_register(function ($class_name) { //this is the autoload method
    include $class_name . '.php';
});

$pak_chee  = new PakChee();
$mockie = new Mockie();

echo $pak_chee->getColor();
echo '<br>';
echo $mockie->getColor();
?>

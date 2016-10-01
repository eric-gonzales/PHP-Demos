<?php
class Cat
{
    public static function meow()
    {
        return static::getName();
    }

    private static function getName()
    {
        return 'Cat';
    }
}

class PakChee extends Cat
{
    public static function getName()
    {
        return 'Pak Chee';
    }
}

echo Cat::meow(); //echo "Cat"
echo '<br>';
echo PakChee::meow(); //echo "Pak Chee"
?>
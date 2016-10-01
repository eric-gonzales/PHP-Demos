#Output Control

This is a test of the **PHP Output Control**. 

See: http://php.net/manual/en/intro.outcontrol.php

##Examples
* 

##Notes
* `ob_start()` tells PHP to "Start remembering everything that would normally be outputted, but don't quite do anything with it yet."
    * `ob_start([callback])` allows for a callback function to be executed immediately after `ob_flush()` or `ob_clean()`
* `ob_flush()` "stops saving things" and outputs it. 
* `ob_clean()` "stops saving things" and "discards whatever was saved". 
* `ob_end_flush()` and `ob_end_clean()` already erases (cleans) the output buffer
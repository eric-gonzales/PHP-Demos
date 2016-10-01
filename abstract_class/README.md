#Abstract Classes

See: http://php.net/manual/en/intro.outcontrol.php

Also See: http://stackoverflow.com/a/34513815

##Examples
* 

##Notes
* Abstract classes cannot be instantiated. 
* Abstract classes (like any other class but not like an Interface) doesn't support multiple inheritance.
* Any class that contains at least one abstract method must also be abstract.
* An abstract method cannot contain a body.
* When inheriting from an abstract class, all methods marked abstract in the parent's class declaraction must be:
    * Defined by the child.
    * Same (or less restricted) visibility
    * Signatures must match

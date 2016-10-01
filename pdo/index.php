<?php

/*
 * The Prepared Statements Method
 * Best Practice
 */
//f
$username = 'myusername';
$password = 'mypassword';

try {
    $db = new PDO('mysql:host=myhost;dbname=mydb', $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'works';
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

<?php
/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/22/2016
 * Time: 2:30 AM
 */
require 'classes/FormMagicReal.php';

$loginForm = new FormMagicReal("Login","form1");
$registrationForm = new FormMagicReal("Register","form2");

echo $loginForm->getName()." ".PHP_EOL." ".$registrationForm->getName();
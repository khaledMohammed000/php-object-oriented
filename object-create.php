<?php
/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/19/2016
 * Time: 4:56 PM
 */

require 'classes/formClass.php';

$form = new MyForm();
var_dump($form);

echo "<br>";

$anotherForm = new MyForm();
var_dump($anotherForm);

echo "<br>";

echo gettype($form);

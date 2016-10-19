<?php
/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/19/2016
 * Time: 5:30 PM
 */
//objects a=can be destroyed by either
//1. program termination
//2. using unset();
//3. assigning a NULL value to object reference

require 'classes/formClass.php';

$form = new MyForm();

unset($form);

var_dump($form);
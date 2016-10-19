<?php
/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/19/2016
 * Time: 8:25 PM
 */

require 'classes/formClass.php';
$form = new MyForm();

$form->setName('Test');
//using the method defined in formClass.php
var_dump($form->getName());


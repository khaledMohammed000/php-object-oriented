<?php
/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/19/2016
 * Time: 7:46 PM
 */
require  'classes/formClass.php';
$form = new MyForm();

$name = $form->getName();

var_dump($name);
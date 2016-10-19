<?php
/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/19/2016
 * Time: 8:35 PM
 */
require 'classes/formClass.php';

$form = new MyForm();
//adding new property to the instantiated object

$form->set('id','voila');

echo $form->id;

$anotherFrom = new MyForm();
//$anotherFrom->id = 'horray';
echo $anotherFrom->id;

//basically we are adding new properties to objects not the classes
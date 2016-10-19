<?php
/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/19/2016
 * Time: 9:31 PM
 */

//using php unset() function
//it just made its values NULL

require 'classes/formClass.php';
$form = new MyForm();

$form->set('id','yohoo');
unset($form->id);
echo $form->id;

$form->set('id','yohoo');
$form->id = null;
echo $form->id;

$form->set('id');
echo $form->id;
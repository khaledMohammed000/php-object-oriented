<?php
/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/19/2016
 * Time: 5:22 PM
 */

require 'classes/formClass.php';

$form = new MyForm();
$anotherForm = clone $form;

//testing weather they are alis or duplicates
if($form === $anotherForm){
	echo 'They are aliases';
}else{
	echo 'They are duplicates';
}

$anotherForm = $form;

//testing weather they are alis or duplicates
if($form === $anotherForm){
	echo 'They are aliases';
}else{
	echo 'They are duplicates';
}

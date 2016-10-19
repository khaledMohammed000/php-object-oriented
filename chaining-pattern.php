<?php
/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/19/2016
 * Time: 10:11 PM
 */
require 'classes/formClass.php';

$form = new MyForm();

$form->setName('test')->setId('123456');

echo $form->getName().''.PHP_EOL.''.$form->getId();
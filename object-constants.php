<?php
/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/20/2016
 * Time: 2:11 AM
 */
require 'classes/FormConst.php';

$form = new FormConst();

$data = "some random data for logging";
$form->logger($data);

$form->loadHtml();
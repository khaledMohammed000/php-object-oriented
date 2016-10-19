<?php

/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/20/2016
 * Time: 2:38 AM
 */
class FormMagic {
	public $name;
	const WAR = 'Magic';

	public function __construct() {
		echo 'building something Cool !';
	}

	public function setName($name=null){
		if($name){
			$this->name=self::WAR;
		}else{
			$this->name=$name;
		}
	}

	public function getName(){
		return $this->name;
	}
}
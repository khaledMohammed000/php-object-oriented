<?php
/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/19/2016
 * Time: 4:15 PM
 */

class MyForm {
	const NAME = 'stdForm';
	protected $elements = [];
	protected $name ;
	public $valid = false;

	public function setName($name = null){
		if($name){
			$this->name=$name;
		}else{
			$this->name = self::NAME;
		}
	}

	public function getName(){
		return $this->name;
	}

	public function set($property , $value=null){
		$this->$property=$value;
	}


}
<?php

/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/22/2016
 * Time: 2:23 AM
 */
class FormMagicReal {
	public $name;
	public $fields;

	public function __construct($name,$id,array $fields=null) {
		$this->name=$name;
		$this->id = $id;
		if($fields){
			foreach ($fields as $field){
				$this->fields[]=$field;
			}
		}
	}//end of constructor

	public function getName(){
		return $this->name;
	}
}
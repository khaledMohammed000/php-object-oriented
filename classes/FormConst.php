<?php

/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/20/2016
 * Time: 2:13 AM
 */
class FormConst {
	const BASE_PATH = "temp";

	public function logger($data){
		file_put_contents(getcwd()."\\".FormConst::BASE_PATH."\\log\\log.txt",$data,FILE_APPEND);
	}

	public function loadHtml(){
		return require self::BASE_PATH."/html/template.php";
	}
}
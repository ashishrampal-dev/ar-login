<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Medoo/Medoo;

/*
	- PUBLIC
	
	login();
	is_login();
	logout();
	register();

	- PRIVATE

	

*/

class Arlogin extends Medoo {

	private $table = 'users';
	private $fields = [
		'username',
		'password',
		'email'
	];


	public function login() {
		// 

	}

	public function is_login() {

	}

	public function logout() {

	}

	public function register() {

	}

	public function setTable($tablename) {
		if(isset($tablename) && strlen($tablename) > 0){

		}
	}

	/*PRIVATE FUNCTIONS*/

	private function _check_values() {

	}





}
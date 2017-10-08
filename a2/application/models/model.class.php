<?php
abstract class model {
	protected $userID;
	protected $firstName;
	protected $lastName;
	protected $email;
	protected $role;


	public function __construct() {

    //will revisit for future exercises

	}

	public function __set($name, $value) {
		$this->$name = $value;
		return;
	}

	public function __get($name) {
		return $this->$name;
	}

	public function __destruct() {

	}

}

<?php
    abstract class user {

        protected $userId;
        protected $userType;
        protected $firstName;
        protected $lastName;
        protected $emailAddress;
        protected $user_level;


        public function __construct($user_level) {
            $this->user_level = $user_level;
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
        public function echoAttributes() {
            return("User Level: ".$this->user_level."<br> User ID: ".$this->userId."<br> User Type: ".$this->userType."<br> First Name: ".$this->firstName."<br> Last Name: ".$this->lastName."<br> Email Address: ".$this->emailAddress."<br>");
        }
    }
?>

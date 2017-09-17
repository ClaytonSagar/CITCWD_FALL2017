<?php
    class registeredUser extends user {

        public function __construct($user_level, $userId) {
            parent::__construct($user_level);
            $this->userType = 1;
            $this->userId = $userId;
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
?>

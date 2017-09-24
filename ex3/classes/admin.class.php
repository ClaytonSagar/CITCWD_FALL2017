<?php
    class admin extends user {

        public function __construct($user_level, $userId) {
            parent::__construct($user_level);
            $this->user_type = 2;
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

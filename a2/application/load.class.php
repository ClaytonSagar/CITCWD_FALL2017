<?php
class load {


    function view($fileName, $data=null) {
        if(is_array($data)) {
            extract($data);
        }
        include 'views/'.$fileName;


    }
    public function __construct() {
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

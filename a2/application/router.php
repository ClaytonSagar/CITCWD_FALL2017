<?php
function classLoad($class) {

    $controller = "application/controller/" . $class . ".class.php";
    $models = "application/models/" . $class . ".class.php";
    $mainPath = "application/". $class . ".class.php";

    if (file_exists($controller)) {
        require_once $controller;
  }

    elseif (file_exists($models )) {
        require_once $models;
    }
    elseif (file_exists($mainPath)) {
        require_once $mainPath;
    }
}

spl_autoload_register("classLoad");

new controller();

?>

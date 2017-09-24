<?php

function loadClasses($class) {
    include_once('classes/' . $class . '.class.php');
}

spl_autoload_register("loadClasses");


$firstname = $_POST["firstname"];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$registeredUser = new registeredUser("new", "regular");

$registerUser->firstname = $firstname;
$registeredUser->lastname = $lastname;
$registeredUser->emailAddress = $email;

if($registeredUser instanceof registeredUser) {
   echo "The registered user's first name is: " . $firstname . "<br/>";
   echo "The registered user's last name is: " . $lastname . "<br/>";
   echo "The registered user's email address is: " . $email . "<br/>";

   echo "<hr>";
   echo "Processing Complete";
} else {
  echo "Processing Error";
}
?>

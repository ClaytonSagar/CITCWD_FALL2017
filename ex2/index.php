<?php

include_once("classes/class.user.php");
include_once("classes/class.admin.php");
include_once("classes/class.registeredUser.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title>CIT313 Exercise 2: OOP </title>
</head>
<body>

<?php


    $Mike = new registeredUser("Regular User", "0001");
    $Pat = new admin("Administrator", "0002");

    $Mike->firstName = "Mike";
    $Mike->lastName = "Sanchez";
    $Mike->emailAddress = "MSanchez@gmail.com";

    $Pat->firstName = "Pat";
    $Pat->lastName = "Jones";
    $Pat->emailAddress = "Pjones@gmail.com";


    echo($Mike->echoAttributes());
    echo "<hr>";
    echo($Pat->echoAttributes());
?>



</body>
</html>

<?php

/*include_once("classes/class.user.php");
include_once("classes/class.admin.php");
include_once("classes/class.registeredUser.php");*/



function loadClasses($class) {
    include_once('classes/' . $class . '.class.php');
}

spl_autoload_register("loadClasses");

?>
<!DOCTYPE html>
<html>
<head>
    <title>CIT313 Exercise 3: OOP2 </title>
</head>
<body>
<?php
echo "Before You Fill Out This Form, Let's Do Some Math!".registeredUser::performMath(8,12);
echo "<br>";
?>
<form action="results.php" method="post">
    <ul>
        <li>
            <label for="firstname"> First Name: </label>
            <input id="firstname" name="firstname" type="text" required/>
        </li>
        <li>
            <label for="lastname"> Last Name: </label>
            <input id="lastname" name="lastname" type="text"required/>
        </li>
        <li>
            <label for="email"> Email: </label>
            <input id="email" name="email" type="email"required/>
        </li>
    </ul>
    <input class="submit" type="submit" value="Register" />
</form>

</body>
</html>

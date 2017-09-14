<?php
include "_includes/config.php";
include ABSOLUTE_PATH . "_includes/header.inc.php";
?>
		<?php
		$array = array("your name" => "Clayton","favorite color" => "Green",
			"favorite movie" => "No Country For Old Men",
			"favorite book" => "Dracula",
			"favorite website" => "Youtube", );
		 ?>
		 <h1><?php print $array['your name'];?></h1>
		 <ul>
		 <?php
		 unset($array["your name"]);

		 foreach ($array as $value) {
		     echo "<li> $value</li>\n";
		 }
		  ?>
		</ul>
<?php
			include ABSOLUTE_PATH . "_includes/footer.inc.php";
?>

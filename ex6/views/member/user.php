<?php include('views/elements/header.php');?>

<?php
if(is_array($user) ) {
	extract($user); 
}?>

<div class="container">
	<div class="page-header">

<h1><?php echo 'Member '.$uID;?></h1>
  </div>
<p><?php echo strval($first_name.' '.$last_name)?><br></p>
<p><?php echo '<a href="mailto:'.$email.'">'.$email.'</a>';?></p>

</div>

<?php include('views/elements/footer.php');?>
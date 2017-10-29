<?php
require_once('application/config.php');
include('elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Hello From the View</h1>
		<?php
				$message = null;
				if(isset($_SESSION['message'])) {
					$message = $_SESSION['message'];
				}

				echo $message
			?>


	</div>
</div>
<?php include('elements/footer.php');?>

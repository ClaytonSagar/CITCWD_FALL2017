<?php
class Controller {

    public $load;
    public $user;


function __construct() {
        $this->load = new load();
        $this->user = new user();
        $this->home();
    }


function home() {

		$this->user->userID = "csagar";
        $this->user->firstname = "Clayton";
        $this->user->lastname = "Sagar";
        $this->user->email = 'csagar@umail.iu.edu';
        $this->user->role = "student";



    $data = $this->user->getName();

		$this->load->view("view.php",$data);
	}


}
?>

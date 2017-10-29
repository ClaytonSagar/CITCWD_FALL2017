<?php

class Controller {

   	public $load;
		public $data = array();


		function __construct($view, $method = null, $parameters = null){
				//instantiate the load class
				$this->load = new Load();
				new Model();
				$u = new User();

				if($this->access == 1 && !$u->isAdmin()) {
					$_SESSION['redirect'] = $view;
					header('Location: '.BASE_URL.'login/');
				}
				else {
					//run any task methods
					if($method){
						$this->runTask($method, $parameters);
					}else{
						$this->defaultTask();
					}
					//render the view
					$this->load->view($view.'.php', $this->data);
				}
			}


	public function runTask($method, $parameters = null){

		if($method && method_exists($this, $method)) {

					//the call_user_func_array expects an array so we create a null array if parameters is empty
					if(!is_array($parameters)){
						$parameters = array();
					}

          call_user_func_array(array($this, $method), $parameters);

     	}

	}

	public function defaultTask(){

	}

	public function set($key, $value){

		$this->data[$key] = $value;

	}



}

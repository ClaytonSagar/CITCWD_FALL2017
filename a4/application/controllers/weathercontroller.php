<?php

class WeatherController extends Controller {

	public $result;

	public function index(){
		$this->set('result',false);
	}

	public function getResults() {

		$url = "http://api2.worldweatheronline.com/free/v2/weather.ashx?q=".$_POST['zip']."&format=xml&num_of_days=2&key=223f751e8db34b2dba0105329172011";
		$url .= $_POST['zip']."&temp_unit=f";
		$xml = simplexml_load_file($url);

		$xml->zip = $_POST['zip'];

		$this->set('result',true);
		$this->set('weather',$xml);
	}
}

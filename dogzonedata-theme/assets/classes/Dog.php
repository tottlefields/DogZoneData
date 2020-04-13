<?php
class Dog {
	var $name;
	var $color;
	var $dogColour;

	// initializes the value of screensize,ram,company and processor
	function __construct() {
		$this->name = 'Kylo';
		$this->color = 'Black';
		$this->dogColour = 'Sable';
		
// 		$this->screen_size = $screen_size;
// 		$this->ram = $ram;
// 		$this->processor = $processor;
// 		$this->company = $company;
	}

	// calculates the price of the mobile according to the features
/* 	function set_price() {
		$s = $this->screen_size;
		$r = $this->ram;
		$proc = $this->processor;
		$pr1 = $this->company;
		// converts the company name to lower case
		$pr = strtolower ( $pr1 );
		// this block gets executed if the user enters the valid company i.e available in our catalog
		if ($pr == "samsung" || $pr == "moto" || $pr == "lenovo" || $pr == "nokia") {
			if ($pr == "samsung") {
				$cost = 7000 * ($s / 4.0) + 7000 * ($r / 1.0) + 7000 * ($proc / 1.0) + 0.05 * 7000;
			} elseif ($pr == "moto") {
				$cost = 5999 * ($s / 4.0) + 5999 * ($r / 1.0) + 5999 * ($proc / 1.0) + 0.05 * 5999;
			} elseif ($pr == "lenovo") {
				$cost = 4000 * ($s / 4.0) + 4000 * ($r / 1.0) + 4000 * ($proc / 1.0) + 0.05 * 4000;
			} elseif ($pr == "nokia") {
				$cost = 6100 * ($s / 4.0) + 6100 * ($r / 1.0) + 6100 * ($proc / 1.0) + 0.05 * 6100;
			}
			// displays the cost
			echo "price:" . ( int ) $cost . "\n";
		} else
			echo "specified company not available in our catalog\n";
	} */
}

?>

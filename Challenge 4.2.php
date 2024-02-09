<?php
	// Array for storing animal names
	$animals = array('cat', 'dog', 'hamster');

	// This will replace the 3rd entry in the array as there is already an entry there
	$animals[2] = 'elephant';

	// Prints a count of 3 since no extra entries were added
	echo count($animals);
?>
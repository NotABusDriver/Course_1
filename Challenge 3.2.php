<?php
	// Array of emojis
	$array = array_reverse(array('🍎', '🍌', '🍕', '🎂'), true);

	// Will print the variable in the third position
	// This is because the array starts at index 0 and the true statement keeps the indexes for each entry regardless of reversal
	echo $array[2];
?>
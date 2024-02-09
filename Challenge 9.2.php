<?php
	// Creates a function called hello that prints a message
	function hello()
	{
    	echo 'Hello World!';
	}

	// Creates a string variable called hello
	$func = 'hello';

	// Calls the variable as a function, which uses the string as the function name
	// This results in the message from hello() being successfully printed
	$func();
?>
<?php
    /*
    * A Functions! 
    */

    // A function called cat that calls upon another function and returns the result
    function cat()
    {
        $dog = dog();
        // $dog = strtoupper($dog);

        return $dog;
    }

    /* Another function */

    // Called by cat, returns 'Molly' to cat which returns that string to the variable $var
    function dog()
    {
        return 'Molly';
    }

    // Variable for storing the string result
    $var = cat();

    // '!' is commented out
    echo $var; echo ' the dog'; // echo '!';
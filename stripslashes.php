<?php
// stripslashes

/*
    # Remove backslashes
    This function can be use for clean data received 
    from user.
*/
$str = "Hello \ my name \ is Ali";
var_dump(stripslashes($str));

// and can be use for ignore escape sequences
$str = "Wellcome \n This is world";
var_dump(stripslashes($str));
<?php 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "maru.ragpala@gmail.com";
    $to = "boeingmagr@gmail.com";
    $subject = "PHP Mail Test script";
    $message = "This is a test to check the PHP Mail functionality";
    $headers = "From:" . $from;
	
	if (mail($to,$subject,$message, $headers))
	{
    echo "Message accepted";
	echo "\nTest email sent";
	}
	else
	{
		echo "Error: Message not accepted";
		$errorMessage = error_get_last()['message'];
		print_r(error_get_last());
	}
    
?>
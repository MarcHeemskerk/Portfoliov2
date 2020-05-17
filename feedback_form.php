<?php
	$userName 		= $_POST['name'];
	$userEmail	 	= $_POST['email'];
	$userMessage 	= $_POST['message'];

	$to 			= "marc-heemskerk@hotmail.nl";
	$subject 		= "Email from my website";
	$body 			= "Information Submitted:";

	$body .= "\r\n Name: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;


	if (mail($to, $subject, $body))
	{
	    header("Location: http://www.marc.smuldesign.nl/");
    }

    else
    {
        echo "Error: Message not accepted";
    }
?>
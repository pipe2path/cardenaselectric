<?php

	// youremail here
	$to = "dogotar777@gmail.com"; //youremail@gmail.com
	$from = 'email';
	$name = 'name';
	$headers = "From: $from";
	$subject = "You have a message.";

	$fields = array();
	$fields{"name"} = "Name";
	$fields{"email"} = "Email";
	$fields{"phonenumber"} = "Phone number";
	$fields{"message"} = "Message";

	$body = "Here is what was sent Electron, form 'Comment Blog':\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s:%s\n",$b,$_REQUEST[$a]); }

	$send = mail($to, $subject, $body, $headers, $message);

?>

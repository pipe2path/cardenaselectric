<?php

	// youremail here
	$to = "dogotar777@gmail.com"; //youremail@gmail.com
	$from = 'email';
	$name = 'name';
	$headers = "From: $from";
	$subject = "You have a message.";

	$fields = array();
	$fields{"email"} = "Email";

	$body = "Here is what was sent Electron, form 'NEWSLETTER SIGNUP':\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s:%s\n",$b,$_REQUEST[$a]); }

	$send = mail($to, $subject, $body, $headers, $message);

?>

<?phpfunction send_mail(){#mail test scipt	$email = $_POST['email'];	$subject = $_POST['subject'];	$massage = $_POST['massage'];	if($email && $subject && $massage){		mail ($email,$subject,$massage);		$m = "email sent";	}#end error check}#end send_mail?>
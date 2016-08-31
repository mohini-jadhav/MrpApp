<?php
class eventsBase {
	var $events = array ();
	var $maps = array ();
	function exists($event, $table = "") {
		if ($table == "")
			return (array_key_exists ( $event, $this->events ) !== FALSE);
		else
			return isset ( $this->events [$event] ) && isset ( $this->events [$event] [$table] );
	}
	function existsMap($page) {
		return (array_key_exists ( $page, $this->maps ) !== FALSE);
	}
}
class class_GlobalEvents extends eventsBase {
	function class_GlobalEvents() {
		// fill list of events
		$this->events ["AfterSuccessfulRegistration"] = true;
		
		// onscreen events
	}
	
	// handlers
	
	// After successful registration
	function AfterSuccessfulRegistration(&$userdata, &$pageObject) {
		
		// ********** Send simple email ************
		$email = "test@test.com";
		$from = "admin@test.com";
		$msg = "Hello there\nBest regards";
		$subject = "Sample subject";
		$attachments = array ();
		// Attachments description. The 'path' is required. Others parameters are optional.
		// $attachments = array(
		// array('path' => getabspath('files/1.jpg')),
		// array('path' => getabspath('files/2.jpg'), 'name' => 'image.jpg', 'encoding' => 'base64', 'type' => 'application/octet-stream')) ;
		
		$ret = runner_mail ( array (
				'to' => $email,
				'subject' => $subject,
				'body' => $msg,
				'from' => $from,
				'attachments' => $attachments 
		) );
		// You can manually overwrite SMTP settings
		// $ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'from'=>$from, 'attachments' => $attachments,
		// 'host' => 'somehost', 'port' => 25, 'username' => 'smtpUserName', 'password' => 'password'));
		if (! $ret ["mailed"])
			echo $ret ["message"];
		
		;
	} // function AfterSuccessfulRegistration
		  
	// onscreen events
}
?>

<?
/**
* require all composer dependencies; requiring the autoload file loads all composer packages at once
**/
require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");

/**
 * require mail-config.php so we have access to our keys and e-mail send-to email
 **/
require_once("mail-config.php");

// verify user's reCAPTCHA input
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$response = $recaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);

try {
	// if reCAPTCHA error, output the error code to the user
	if (!$response->isSuccess()) {
	throw(new Exception("reCAPTCHA error!"));
	}

	// We can't trust end users, so we sanitize their form inputs: name, email, subject, and message
	// note, this exact method won't work in angular -- we're assuming that jQuery is doing the submitting
	$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$body = filter_input(INPUT_POST, "body", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

	// create Swift message
	$swiftMessage = new Swift_Message();

	// attach the sender to the message
	// this takes the form of an associative array where the Email is the key for the real name
	$swiftMessage->setFrom([$email => $name]);

	/**
	* attach the recipients to the message
	* $MAIL_RECIPIENTS is set in mail-config.php
	**/
	$recipients = $mailRecipients;
	$swiftMessage->setTo($recipients);

	// attach the subject line to the message
	$swiftMessage->setSubject($subject);

	/**
	 * attach the actual message to the message
	 * here, we set two versions of the message: the HTML formatted message and a plain text version of the HTML
	 * content this lets users who aren't viewing HTML content in Emails still access the links
	 **/
	$swiftMessage->setBody($body, "text/html");
	$swiftMessage->addPart(html_entity_decode($body), "text/plain");